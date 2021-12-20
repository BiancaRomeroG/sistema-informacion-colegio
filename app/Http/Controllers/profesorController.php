<?php

namespace App\Http\Controllers;

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
        ->orderBy('personas.id', 'asc')->paginate(14);
        return view('profesor.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 14);
    }

    public function show($profesorId) {
        $profesor = profesores::findOrFail($profesorId);
        $persona = Persona::find($profesor->id_persona);
        return view('profesor.show', compact('persona', 'profesor'));
    }

    public function create(){
        $actionform = route("profesor.store"); 
        return view('Profesor.create', compact('actionform'));
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
      
       return redirect()->route('profesor.index')->with(
        'success',
        'Profesor creado correctamente'
    );
    }


    public function edit($id){
        $profesor = profesores::findOrFail($id);
        $persona = Persona::findOrFail($profesor->id_persona);
        $actionform = route('profesor.update',[$profesor->id]); 
       return view('profesor.edit', compact('profesor','persona','actionform'));
      
    }

    public function update($id, Request $request){

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

        return view('profesor.show', compact('persona', 'profesor'));
    }

    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->delete();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Profesor eliminado ID Persona: '.$persona->id);

        return redirect()->route('profesor.index')->with('success', 'Profesor eliminado correctamente');
    }
}
