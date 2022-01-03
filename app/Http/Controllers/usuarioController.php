<?php

namespace App\Http\Controllers;

use App\Models\administrativos;
use App\Models\Persona;
use App\Models\profesores;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usuarioController extends Controller
{
    public function index(){
        $personas = Persona::join('administrativos', 'administrativos.id_persona','personas.id')
        ->join('usuarios', 'usuarios.id', 'administrativos.id_usuario')
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario','usuarios.id_rol', 'usuarios.estado');

        $personas = Persona::join('profesores','profesores.id_persona', 'personas.id')
        ->join('usuarios', 'usuarios.id', 'profesores.id_usuario')
        ->union($personas)
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario', 'usuarios.id_rol', 'usuarios.estado')
        ->orderBy('id_rol', 'asc')
        ->get();

        return view('Usuario.index', compact('personas'))->with('i');
    }
    
    public function update($id){

        $usuario = User::findOrFail($id);

        $persona = Persona::getPersonByIdUser($usuario->id);

        $usuario->contrasenha = Hash::make($persona->ci);
        $usuario->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de datos Usuario ID: '.$usuario->id);

        return redirect()->route('Usuario.index')->with(
            'success',
            'Contraseña restablecida correctamente'
        );
    }

    public function updateEstado($id) {
        $usuario = User::findOrFail($id);

        if ($usuario->estado == 0) {
            $usuario->estado = 1;
            $usuario->save();
            return redirect()->route('usuario.show', $usuario->id)->with(
                'success',
                'Usuario activado'
            );
        }else{
            $usuario->estado = 0;
            $usuario->save();
            return redirect()->route('usuario.show', $usuario->id)->with(
                'success',
                'Usuario desactivado'
            );
        }
    }
  
    public function show($id){
        $usuario = User::findOrFail($id);

        $persona = UsuarioController::getPersonByIdUser($usuario->id);

        return view('Usuario.show', compact('persona'));  
    }


    static public function getPersonByIdUser($id){
        $usuario = User::findOrFail($id);

        $persona = Persona::join('administrativos', 'administrativos.id_persona','personas.id')
        ->join('usuarios','administrativos.id_usuario','usuarios.id')
        ->where('administrativos.id_usuario', $usuario->id)
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario','usuarios.id_rol', 'usuarios.estado');

        $persona = Persona::join('profesores','profesores.id_persona', 'personas.id')
        ->join('usuarios',  'profesores.id_usuario', 'usuarios.id')
        ->where('profesores.id_usuario', $usuario->id)
        ->union($persona)
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario', 'usuarios.id_rol', 'usuarios.estado')
        ->first();

        return $persona;
    }


}
