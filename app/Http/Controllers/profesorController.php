<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\profesores;
use Illuminate\Http\Request;

class profesorController extends Controller
{
    public function index() {
        $personas = Persona::orderBy('id', 'desc')->paginate();
        return view('profesor.index', compact('personas'));
    }

    public function show($profesor) {
        $persona = Persona::find($profesor);
        return view('profesor.show', compact('persona'));
    }

    public function destroy($id){
        $profesor= profesores::findOrFail($id);
        $profesor->delete();
        return redirect()->route('alumno.index');
    }
}
