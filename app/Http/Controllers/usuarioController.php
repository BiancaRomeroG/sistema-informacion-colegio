<?php

namespace App\Http\Controllers;

use App\Models\administrativos;
use App\Models\Persona;
use App\Models\profesores;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;
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
        ->paginate(10);

        return view('usuario.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    public function update($id){


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

        $usuario->contrasenha = $persona->ci;
        $usuario->save();
        return redirect()->route('usuario.index')->with(
            'success',
            'Contraseña restablecida correctamente'
        );
    }
  
    public function show($id){
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

        return view('usuario.show', compact('usuario','persona'));  
    }


}
