<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcion;
use App\Models\alumnos;
use App\Models\boletines;
use App\Models\cardex;
use App\Models\cursos;
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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware("roles:Director,Secretaria,none");
    }

    public function index(Request $request) {
        //$select = trim($request->select);
        $personas = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('inscripciones', 'alumnos.id', 'inscripciones.id_alumno')
        ->select('alumnos.id as idAlumno', 'alumnos.cod_rude', 'inscripciones.curso', 'personas.*')
        ->get();
        return view('Inscripcion.index', compact('personas'))->with('i');
    }

    public function store(StoreInscripcion $request) {
        $ins = inscripciones::join('alumnos', 'alumnos.id', 'inscripciones.id_alumno')
        ->where('inscripciones.id_alumno', '=', $request->id_alumno)->get();

        if (cursoController::cant_alumnos($request->curso) >= cursoController::cupo_max($request->curso))
            return redirect()->route('inscripcion.create')->with('error', 'El curso '.$request->curso.'° de secundaria ya no tiene cupos disponibles');
        
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

        $boletin = boletines::create([
            'anho' => Carbon::now()->format('Y'),
            'nro_trim' => 1,
            'id_cardex' => $cardex->id,
        ]);

        $curso = cursos::findOrFail($request->curso);
        $curso->cant_alumnos++;
        $curso->save();
        bitacoraController::bitacoraRegister(Auth::user()->id, 'Alumno inscrito ID: '.$request->id_alumno.' - Cardex creado ID:'.$cardex->id);

        return redirect()->route('inscripcion.show', $inscripcion->id)->with('success', 'Alumno inscrito correctamente');
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
        ->get();
        return view('Inscripcion.create', compact('personas', 'texto'));
    }

    public function show($id) {
        $inscripcion = inscripciones::findOrFail($id);
        $alumno = alumnos::findOrFail($inscripcion->id_alumno);
        $persona = Persona::findOrFail($alumno->id_persona);
        return view('Inscripcion.show', compact('inscripcion', 'alumno', 'persona'));
    }
    
}
