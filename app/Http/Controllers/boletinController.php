<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\boletines;
use App\Models\cursos;
use App\Models\Persona;
use App\Models\cardex;
use App\Models\materias;
use App\Models\tutores;

class boletinController extends Controller
{
    public function index(Request $request)
    {
        $cursos = cursos::all();
        return view('boletin.index', compact('cursos'));
    }

    public function show($id)
    {
        $curso = cursos::findOrFail($id);
        $alumnos = alumnos::join('inscripciones', 'inscripciones.id_alumno', 'alumnos.id')
            ->where('inscripciones.id_curso', '=', $curso->id)
            ->get();
        // $boletin = boletines::findOrFail($id);
        $personas = [];
        foreach ($alumnos as $alumno) {
            $personas[] = Persona::findOrFail($alumno->id_persona);
        }
        return view('boletin.show', compact('personas', 'curso'));
    }
    
    public function trim1($id){
        $cardex = cardex::findOrFail($id);
        $alumno = alumnos::findOrFail($cardex->id_alumno);
        $persona = Persona::findOrFail($alumno->id_persona);
        $tutor = tutores::findOrFail($alumno->id_tutor);
        $personaTutor = Persona::findOrFail($tutor->id_persona);
        $trimestre1 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 1)
        ->get();  
        return view('boletin.trim1' , compact('trimestre1', 'persona',
        'alumno', 'personaTutor','cardex'))->with('i');
    }

    public function trim2($id){
        $cardex = cardex::findOrFail($id);
        $alumno = alumnos::findOrFail($cardex->id_alumno);
        $persona = Persona::findOrFail($alumno->id_persona);
        $tutor = tutores::findOrFail($alumno->id_tutor);
        $personaTutor = Persona::findOrFail($tutor->id_persona);
        $trimestre2 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 2)
        ->get(); 
        return view('boletin.trim2' , compact('trimestre2', 'persona',
        'alumno', 'personaTutor','cardex'))->with('i');
    }

    public function trim3($id){
        $cardex = cardex::findOrFail($id);
        $alumno = alumnos::findOrFail($cardex->id_alumno);
        $persona = Persona::findOrFail($alumno->id_persona);
        $tutor = tutores::findOrFail($alumno->id_tutor);
        $personaTutor = Persona::findOrFail($tutor->id_persona);
        $trimestre3 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 3)
        ->get();
        return view('boletin.trim3' , compact('trimestre3', 'persona',
        'alumno', 'personaTutor','cardex'))->with('i');
    }
}
