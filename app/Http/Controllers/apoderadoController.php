<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\tutores;
use Illuminate\Http\Request;

class apoderadoController extends Controller
{
    public function index() {
        //$personas = Persona::orderBy('id', 'desc')->paginate();
        //return view('welcome', compact('personas'));
        $actionform = route('apoderado.store'); 
        return view('apoderado.create', compact('actionform'));
    }

    public function create(){ 
        $actionform = route('apoderado.store'); 
        return view('Apoderado.create', compact('actionform'));
    }

    public function store(Request $request){
        $persona = Persona::create([
            'nombre'       => $request->nombre,
            'apellido_pat' => $request->apellido_pat,
            'apellido_mat' => $request-> apellido_mat,
            'ci'           => $request->ci,
            'fecha_nac'    => $request->fecha_nac,
            'sexo'         => $request->sexo,
            'email'        => $request->email,
            'direccion'    => $request->direccion,
            'telefono'     => $request->telefono ,
        ]);
        $persona->save();

        $apoderado = tutores::create([
            'id_persona' => $persona->id,
            'parentesco' => $request->parentesco,
        ]);
        $apoderado->save();

        return redirect()->back()->with(
            'success',
            'Apoderado creado correctamente'
        );
    }

    public function destroy($id){
        $tutor = tutores::findOrFail($id);
        $tutor->delete();
        return redirect()->route('apoderado.index');
    }
}
