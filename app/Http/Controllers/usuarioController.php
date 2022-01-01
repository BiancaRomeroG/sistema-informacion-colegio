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
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario','usuarios.id_rol');

        $personas = Persona::join('profesores','profesores.id_persona', 'personas.id')
        ->join('usuarios', 'usuarios.id', 'profesores.id_usuario')
        ->union($personas)
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario', 'usuarios.id_rol')
        ->orderBy('id_rol', 'asc')
        ->get();

        return view('usuario.index', compact('personas'))->with('i');
    }
    
    public function update($id){

        $usuario = User::findOrFail($id);

        $persona = Persona::getPersonByIdUser($usuario->id);

        $usuario->contrasenha = Hash::make($persona->ci);
        $usuario->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de datos Usuario ID: '.$usuario->id);

        return redirect()->route('usuario.index')->with(
            'success',
            'Contraseña restablecida correctamente'
        );
    }
  
    public function show($id){
        $usuario = User::findOrFail($id);

        $persona = UsuarioController::getPersonByIdUser($usuario->id);

        return view('usuario.show', compact('usuario','persona'));  
    }


    static public function getPersonByIdUser($id){
        $usuario = User::findOrFail($id);

        $persona = Persona::join('administrativos', 'administrativos.id_persona','personas.id')
        ->join('usuarios','administrativos.id_usuario','usuarios.id')
        ->where('administrativos.id_usuario', $usuario->id)
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario','usuarios.id_rol');

        $persona = Persona::join('profesores','profesores.id_persona', 'personas.id')
        ->join('usuarios',  'profesores.id_usuario', 'usuarios.id')
        ->where('profesores.id_usuario', $usuario->id)
        ->union($persona)
        ->select('personas.*','usuarios.id as idUsuario', 'usuarios.nombre_usuario', 'usuarios.id_rol')
        ->first();

        return $persona;
    }


}
