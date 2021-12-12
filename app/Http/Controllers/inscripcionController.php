<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\cardex;
use App\Models\inscripciones;
use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\isEmpty;

class inscripcionController extends Controller
{
    var $persona;

    public function index(Request $request) {
        //$select = trim($request->select);
        $personas = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('inscripciones', 'alumnos.id', 'inscripciones.id_alumno')
        ->select('alumnos.id as idAlumno', 'alumnos.cod_rude', 'inscripciones.curso', 'personas.*')
        ->paginate(14);
        return view('inscripcion.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 14);
    }

    public function store(Request $request) {
        $ins = inscripciones::join('alumnos', 'alumnos.id', 'inscripciones.id_alumno')
        ->where('inscripciones.id_alumno', '=', $request->id_alumno)->get();

        
        if (count($ins) > 0 )
            return redirect()->route('inscripcion.create')->with('error', 'El alumno ya esa inscrito');

        if ($request->curso == 0)
            return redirect()->route('inscripcion.create')->with('error', 'Debe seleccionar un curso');

        $inscripcion = inscripciones::create([
            'fecha' => Carbon::now()->format('Y,m,d'),
            'curso' => $request->curso,
            'id_admin' => 2,
            'id_alumno' => $request->id_alumno,
            'id_curso' => $request->curso
        ]);

        $cardex = cardex::create([
            'gestion' =>  Carbon::now()->format('Y'),
            'id_curso' => $request->curso,
            'id_alumno' => $request->id_alumno
        ]);
        return redirect()->route('inscripcion.show', $inscripcion->id);
    }

    public function create(Request $request) {
        $texto = trim($request->nombre);
        $personas = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->select('alumnos.id as idAlumno', 'alumnos.cod_rude', 'personas.*')
        ->where('personas.nombre', 'LIKE','%'.$texto.'%')
        ->orwhere('personas.apellido_pat', 'LIKE','%'.$texto.'%')
        ->orwhere('personas.apellido_mat', 'LIKE','%'.$texto.'%')
        ->orwhere('personas.ci', 'LIKE', $texto)
        ->orwhere('alumnos.cod_rude', 'LIKE', $texto)
        ->paginate(5);
        return view('inscripcion.create', compact('personas', 'texto'));
    }

    public function show($id) {
        $inscripcion = inscripciones::findOrFail($id);
        $alumno = alumnos::findOrFail($inscripcion->id_alumno);
        $persona = Persona::findOrFail($alumno->id_persona);
        return view('inscripcion.show', compact('inscripcion', 'alumno', 'persona'));
    }
    
}
