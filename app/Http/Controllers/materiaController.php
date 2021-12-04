<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\materias;
use App\Models\Persona;
use App\Models\profesores;
use App\Models\tutores;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    public function index() {
        $materias = Persona::join('profesores', 'profesores.id_persona', 'personas.id')
                           ->join('materias', 'materias.id_profesor', 'profesores.id')
        ->select('materias.id AS idMateria', 'profesores.id AS idProfesor', 'materias.nombre', 'materias.descripcion', 'personas.nombre AS nombrePersona', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        return view('materia.index', compact('materias'));
    }

    public function store(Request $request) {
        $materia = materias::create($request->all());
        $materia->save();
        return redirect()->route('materia.index');
    }

    public function show($id) {
        $materia = materias::find($id);
        $profesor = profesores::find($materia->id_profesor);
        $persona = Persona::find($profesor->id_persona);
        return view('materia.show', compact('materia', 'persona'));
    }

    public function destroy($id){
        $materia = materias::findOrFail($id);
        $materia->delete();
        return redirect()->route('materia.index')->with('success', 'Materia eliminada');
    }

    public function create(){ 
        $profesores = Persona::join('profesores', 'personas.id', 'profesores.id_persona')
        ->select('profesores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        return view('materia.create', compact('profesores'));
    }

    public function edit($id){
        $materia = materias::find($id);
        $profesores = Persona::join('profesores', 'personas.id', 'profesores.id_persona')
        ->select('profesores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $actionform = route('materia.update', $id);
        return view('materia.edit', compact('profesores', 'materia', 'actionform'));
    }

    public function update($id, Request $request) {
        $materia = materias::findOrFail($id);
        $materia->update($request->all());
        return redirect()->route('materia.show', $materia);
    }
}
