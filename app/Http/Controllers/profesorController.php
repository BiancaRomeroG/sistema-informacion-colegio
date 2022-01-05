<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesor;
use App\Models\materias;
use App\Models\Persona;
use App\Models\profesores;
use App\Models\User;
use App\Models\usuario;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class profesorController extends Controller
{
    public function index() {
        $personas = Persona::join('profesores', 'personas.id', 'profesores.id_persona')
        ->join('materias', 'profesores.id', 'materias.id_profesor')
        ->orderBy('personas.id', 'asc')
        ->select('personas.*','materias.nombre as nombreMateria', 'profesores.id as idProfesor')->get();
        return view('Profesor.index', compact('personas'))->with('i');
    }

    public function show($profesorId) {
        $profesor = profesores::findOrFail($profesorId);
        
        $persona = Persona::join('profesores', 'profesores.id_persona', 'personas.id')
        ->where('profesores.id', '=', $profesor->id)
        ->select('personas.*', 'profesores.id AS idProfesor', 'profesores.profesion')
        ->first();

        $materia = materias::join('profesores', 'profesores.id', 'materias.id_profesor')
        ->where('profesores.id', '=', $profesor->id)
        ->first();

        return view('Profesor.show', compact('persona', 'materia'));
    }

    public function create(){
        $actionform = route("profesor.store"); 
        return view('Profesor.create', compact('actionform'));
    }

    public function store (StoreProfesor $request){
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

        $usuario = new usuario();
        $usuario->nombre_usuario = $persona->email;
        $usuario->contrasenha = Hash::make($persona->ci);
        $usuario->id_rol = 3;
        $usuario->estado = 1;
        $usuario->save();

        $profesor = new profesores();
        $profesor->id_persona = $persona->id;
        $profesor->profesion = $request->profesion;
        $profesor->id_usuario = $usuario->id;
        $profesor->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Profesor registrado ID: '.$profesor->id);
      
       return redirect()->route('Profesor.index')->with(
        'success',
        'Profesor creado correctamente'
    );
    }


    public function edit($id){
        $profesor = profesores::findOrFail($id);
        $persona = Persona::findOrFail($profesor->id_persona);
        $actionform = route('profesor.update',[$profesor->id]); 
       return view('Profesor.edit', compact('profesor','persona','actionform'));
      
    }

    public function update($id, StoreProfesor $request){

        $profesor = profesores::findOrFail($id);
        $profesor->profesion = $request->profesion;
        $profesor->save();

        $persona = Persona::findOrfail($profesor->id_persona);

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

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de datos Profesor ID: '.$profesor->id);

        return view('Profesor.show', compact('persona', 'profesor'));
    }

    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->delete();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Profesor eliminado ID Persona: '.$persona->id);

        return redirect()->route('Profesor.index')->with('success', 'Profesor eliminado correctamente');
    }
}
