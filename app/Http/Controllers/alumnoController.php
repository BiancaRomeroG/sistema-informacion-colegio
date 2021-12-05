<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\tutores;
use App\Models\Persona;
use Brick\Math\BigInteger;

class alumnoController extends Controller
{
    public function index() {
        $personas = Persona::join('alumnos', 'personas.id', 'alumnos.id_persona')
        ->select('alumnos.id','personas.nombre', 'personas.apellido_pat','personas.apellido_mat')
        ->orderBy('id', 'desc')->paginate();
        return view('alumno.index', compact('personas'));
    }

    public function show($alumno) {
        $persona = Persona::find(alumnos::findOrFail($alumno)->id_persona);
        return view('alumno.show', compact('persona'));
    }

    public function destroy($id){
        $alumno = Persona::findOrfail($id);
        $persona=Persona::findOrFail($alumno->id_persona);
        $persona->delete();
        $alumno->delete();
        return view('alumno.index');
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

    public function edit($id){
        $alumno = alumnos::findOrFail($id);
        $persona = Persona::findOrFail($alumno->id_persona);
        $tutores = Persona::join('tutores', 'personas.id', 'tutores.id_persona')
        ->select('tutores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $tutorid = tutores::findOrfail($alumno->id_tutor)->id;
        $actionform = route('alumno.update',[$alumno->id]); 
       return view('Alumno.edit', compact('alumno','persona','tutores','tutorid','actionform'));
      
    }

    public function update(alumnos $alumno, Request $request){
        

        $persona = Persona::findOrfail($alumno->id_persona);

        $persona->nombre= $request->nombre;
        $persona->apellido_pat = $request->apellido_pat;
        $persona->apellido_mat = $request-> apellido_mat;
        $persona->ci = $request->ci;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->sexo= $request->sexo;
        $persona->email= $request->email;
        $persona->direccion= $request->direccion;
        $persona->telefono=$request->telefono; 

        $persona->save();

        $alumno->cod_rude = $request->codrude;
        $alumno->id_tutor = $request->tutor_id;
        $alumno->save();
        
        return view('Alumno.show', compact('persona'));
    }
  
}
