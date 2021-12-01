<?php

namespace App\Http\Controllers;

use App\Models\materias;
use App\Models\Persona;
use App\Models\profesores;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    public function index() {
        $profesores = Persona::join('profesores', 'personas.id', 'profesores.id_persona')
        ->select('profesores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        return view('Materia/materiaRegistro', compact('profesores'));
    }

    public function store(Request $request) {
        $materia = materias::create($request->all());
        $materia->save();
        return redirect()->route('materia.index');
    }
}
