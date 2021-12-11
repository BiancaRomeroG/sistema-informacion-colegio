<?php

namespace App\Http\Controllers;

use App\Models\acciones;
use Illuminate\Http\Request;

class bitacoraController extends Controller
{
    
    public function show($id){
        $persona = usuarioController::getPersonByIdUser($id);
        $acciones = acciones::where('acciones.id_usuario', $id)->orderBy('id','asc')->paginate(10);
        return view('bitacora.show', compact('acciones','persona'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    static public function bitacoraRegister($id, $descripcion){
        $accion = acciones::created()
    }
}
