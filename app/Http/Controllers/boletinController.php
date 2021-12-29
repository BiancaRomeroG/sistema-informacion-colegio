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
use Barryvdh\DomPDF\Facade as PDF;

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

        $personas = [];
        foreach ($alumnos as $alumno) {
            $personas[] = Persona::findOrFail($alumno->id_persona);
        }
        return view('boletin.show', compact('personas', 'curso'));
    }

    public function trim1($id){
        $persona = Persona::findOrFail($id);
        $alumno = alumnos::where('alumnos.id_persona', '=', $id)->first();
        $cardex = cardex::where('cardexes.id_alumno', '=', $alumno->id)->first();
/*         $cardex = cardex::findOrFail($id);
        $alumno = alumnos::findOrFail($cardex->id_alumno);
        $persona = Persona::findOrFail($alumno->id_persona); */
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
        $persona = Persona::findOrFail($id);
        $alumno = alumnos::where('alumnos.id_persona', '=', $id)->first();
        $cardex = cardex::where('cardexes.id_alumno', '=', $alumno->id)->first();
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
        $persona = Persona::findOrFail($id);
        $alumno = alumnos::where('alumnos.id_persona', '=', $id)->first();
        $cardex = cardex::where('cardexes.id_alumno', '=', $alumno->id)->first();
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

    public function reporteTrim1(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $alumno = alumnos::where('alumnos.id_persona', '=', $id)->first();
        $cardex = cardex::where('cardexes.id_alumno', '=', $alumno->id)->first();
        $tutor = tutores::findOrFail($alumno->id_tutor);
        $personaTutor = Persona::findOrFail($tutor->id_persona);
        $trimestre1 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 1)
        ->get(); 
        $data = [
            'cardex' => $cardex,
            'alumno' => $alumno,
            'persona' => $persona,
            'tutor' => $tutor,
            'personaTutor' => $personaTutor,
            'trimestre1' => $trimestre1
        ];
          
        $pdf = PDF::loadView('boletin.reporteTrim1', $data)->setPaper('a4', 'landscape');
        return $pdf->download('boletin.pdf');
    }

    public function reporteTrim2(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $alumno = alumnos::where('alumnos.id_persona', '=', $id)->first();
        $cardex = cardex::where('cardexes.id_alumno', '=', $alumno->id)->first();
        $tutor = tutores::findOrFail($alumno->id_tutor);
        $personaTutor = Persona::findOrFail($tutor->id_persona);
        $trimestre2 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 2)
        ->get(); 
        $data = [
            'cardex' => $cardex,
            'alumno' => $alumno,
            'persona' => $persona,
            'tutor' => $tutor,
            'personaTutor' => $personaTutor,
            'trimestre2' => $trimestre2
        ];
          
        $pdf = PDF::loadView('boletin.reporteTrim2', $data);
        return $pdf->download('boletin.pdf');
    }

    public function reporteTrim3(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $alumno = alumnos::where('alumnos.id_persona', '=', $id)->first();
        $cardex = cardex::where('cardexes.id_alumno', '=', $alumno->id)->first();
        $tutor = tutores::findOrFail($alumno->id_tutor);
        $personaTutor = Persona::findOrFail($tutor->id_persona);
        $trimestre3 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 3)
        ->get(); 
        $data = [
            'cardex' => $cardex,
            'alumno' => $alumno,
            'persona' => $persona,
            'tutor' => $tutor,
            'personaTutor' => $personaTutor,
            'trimestre3' => $trimestre3
        ];
          
        $pdf = PDF::loadView('boletin.reporteTrim3', $data);
        return $pdf->download('boletin.pdf');
    }
}
