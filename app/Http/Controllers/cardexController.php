<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\boletines;
use App\Models\cardex;
use App\Models\materias;
use App\Models\pagoMensualidad;
use App\Models\Persona;
use App\Models\tutores;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class cardexController extends Controller
{
    public function index(Request $request) {
        $texto = trim($request->nombre);
        $personas = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('cardexes', 'cardexes.id_alumno', 'alumnos.id')
        ->select('alumnos.id as idAlumno', 'alumnos.cod_rude', 'cardexes.id AS idCardex', 'cardexes.id_curso', 'personas.*')
        ->where('personas.nombre', 'LIKE','%'.$texto.'%')
        ->orwhere('personas.apellido_pat', 'LIKE','%'.$texto.'%')
        ->orwhere('personas.apellido_mat', 'LIKE','%'.$texto.'%')
        ->orwhere('personas.ci', 'LIKE', $texto)
        ->orwhere('alumnos.cod_rude', 'LIKE', $texto)
        ->paginate(5);
        return view('cardex.index', compact('texto', 'personas'));
    }

    public function store(Request $request) {
        if ($request->idCardex == '')
            return redirect()->route('cardex.index')->with('error', 'Debe seleccionar una opcion');
        return redirect()->route('cardex.show', $request->idCardex);
    }

    public function show($id) {
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
        
        $trimestre2 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 2)
        ->get();  

        $trimestre3 = materias::join('notas', 'notas.id_materia', 'materias.id')
        ->join('boletines', 'boletines.id_cardex', 'notas.id_boletin')
        ->join('cardexes', 'cardexes.id', 'boletines.id_cardex')
        ->join('alumnos', 'alumnos.id', 'cardexes.id_alumno')
        ->where('cardexes.id_alumno', '=', $alumno->id)
        ->where('notas.nro_trim', '=', 3)
        ->get();  

        $pagos = pagoMensualidad::join('pagos', 'pagos.id', 'pago_mensualidads.id_pago')
        ->join('tutores', 'tutores.id', 'pago_mensualidads.id_tutor')
        ->join('alumnos', 'alumnos.id_tutor', 'tutores.id')
        ->select('pagos.*', 'pago_mensualidads.nro_cuota')
        ->where('alumnos.id', '=', $alumno->id)
        ->where('tutores.id', '=', $tutor->id)->get();

        return view('cardex.show', compact('trimestre1', 'trimestre2', 'trimestre3', 'persona',
                                           'alumno', 'personaTutor','cardex', 'pagos'))->with('i');
    }
}
