<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\Persona;
use App\Models\tutores;
use Brick\Math\BigInteger;
use Illuminate\Support\Facades\DB;

class alumnoController extends Controller
{
    public function index() {
        $personas = Persona::orderBy('id', 'desc')->paginate();
        return view('welcome', compact('personas'));
    }

    public function show(Persona $alumno) {
        return view('Alumno.show', compact('alumno'));
    }

    public function destroy($id){
        $alumno=alumnos::findOrFail($id);
        $alumno->delete();
        return redirect()->route('Alumno.index');
    }

    public function create(){ 
        $tutores = Persona::join('tutores', 'personas.id', 'tutores.id_persona')
        ->select('tutores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $actionform = route("alumno.store"); 
        return view('Alumno/create', compact('actionform','tutores'));
    }

    public function store (Request $request){
        $persona = Persona::create([
            'nombre'=> $request->nombre,
            'apellido_pat' => $request->apellido_pat,
            'apellido_mat' => $request-> apellido_mat,
            'ci' => $request->ci,
            'fecha_nac' => $request->fecha_nac,
            'sexo'=> $request->sexo,
            'email'=> $request->email,
            'direccion'=> $request->direccion,
            'telefono'=>$request->telefono ,
        ]);
        $persona->save();
        $alumno = new alumnos();
        $alumno->id_persona = $persona->id;
        $alumno->cod_rude = $request->codrude;
        $alumno->id_tutor = $request->tutor_id;
        $alumno->save();
       return redirect()->back()->with(
        'success',
        'Alumno creado correctamente'
    );
    }
}
