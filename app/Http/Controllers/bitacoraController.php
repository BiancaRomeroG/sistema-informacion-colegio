<?php

namespace App\Http\Controllers;

use App\Models\acciones;
use DateTime;
use Illuminate\Http\Request;
use PDF;

class bitacoraController extends Controller
{
    
    public function show($id){
        $persona = usuarioController::getPersonByIdUser($id);
        $acciones = acciones::where('acciones.id_usuario', $id)->orderBy('id','asc')->paginate(10);
        return view('bitacora.show', compact('acciones','persona'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    static public function bitacoraRegister($id, $descripcion){
        $accion = acciones::create([
            'fecha' => new DateTime('Now'),
            'descripcion' => $descripcion,
            'id_usuario' => $id,
        ]);
        $accion->save();
    }

    public function downloadPDF($id){
        $persona = usuarioController::getPersonByIdUser($id);
        $acciones = acciones::where('acciones.id_usuario', $id)->orderBy('id','asc')->get();
        $pdf = PDF::loadView('Bitacora.pdf',['acciones' => $acciones, 'persona' => $persona])->setPaper('a4');
        $tittle = 'Bitacora-'.$persona->nombre.$persona->apellido_pat.$persona->apellido_mat.'.pdf';
        return $pdf->download($tittle);
      //  return view('Bitacora.pdf', compact('persona', 'acciones'));

    }
}
