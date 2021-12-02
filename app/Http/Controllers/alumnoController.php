<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\Persona;
use Brick\Math\BigInteger;

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
}
