<?php

namespace App\Http\Controllers;

use App\Models\cursos;
use App\Models\materias;
use App\Models\notas;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class notasController extends Controller
{

    public function index() {
        return view('nota.index');
    }

    public function show($id_curso) {
        $curso = cursos::findOrFail($id_curso);
        $profesor = DB::table('profesores')->where('id_usuario', '=', Auth::user()->id)->first();
        $materia = DB::table('materias')->where('id_profesor', '=', $profesor->id)->first();
        $persona = Persona::findOrFail($profesor->id_persona);
        $trimestre1 = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('cardexes', 'cardexes.id_alumno', 'alumnos.id')
        ->join('boletines', 'boletines.id_cardex', 'cardexes.id')
        ->join('notas', 'notas.id_boletin', 'boletines.id')
        ->join('materias', 'materias.id', 'notas.id_materia')
        ->select('personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat', 'cardexes.id AS idCardex', 'boletines.id AS idBoletin', 'alumnos.id AS idAlumno', 'cardexes.id_curso', 'notas.ser', 'notas.saber', 'notas.hacer', 'notas.decidir', 'notas.nota_trimestral', 'notas.nro_trim', 'materias.nombre AS materiaNombre')
        ->where('cardexes.id_curso', '=', $curso->id)
        ->where('materias.id', '=', $materia->id)
        ->where('notas.nro_trim', '=', 1)
        ->get();

        $trimestre2 = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('cardexes', 'cardexes.id_alumno', 'alumnos.id')
        ->join('boletines', 'boletines.id_cardex', 'cardexes.id')
        ->join('notas', 'notas.id_boletin', 'boletines.id')
        ->join('materias', 'materias.id', 'notas.id_materia')
        ->select('personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat', 'cardexes.id AS idCardex', 'boletines.id AS idBoletin', 'alumnos.id AS idAlumno', 'cardexes.id_curso', 'notas.ser', 'notas.saber', 'notas.hacer', 'notas.decidir', 'notas.nota_trimestral', 'notas.nro_trim', 'materias.nombre AS materiaNombre')
        ->where('cardexes.id_curso', '=', $curso->id)
        ->where('materias.id', '=', $materia->id)
        ->where('notas.nro_trim', '=', 2)
        ->get();

        $trimestre3 = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('cardexes', 'cardexes.id_alumno', 'alumnos.id')
        ->join('boletines', 'boletines.id_cardex', 'cardexes.id')
        ->join('notas', 'notas.id_boletin', 'boletines.id')
        ->join('materias', 'materias.id', 'notas.id_materia')
        ->select('personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat', 'cardexes.id AS idCardex', 'boletines.id AS idBoletin', 'alumnos.id AS idAlumno', 'cardexes.id_curso', 'notas.ser', 'notas.saber', 'notas.hacer', 'notas.decidir', 'notas.nota_trimestral', 'notas.nro_trim', 'materias.nombre AS materiaNombre')
        ->where('cardexes.id_curso', '=', $curso->id)
        ->where('materias.id', '=', $materia->id)
        ->where('notas.nro_trim', '=', 3)
        ->get();
        return view('nota.show', compact('trimestre1', 'trimestre2', 'trimestre3', 'id_curso', 'persona', 'materia'));
    }

    public function create(Request $request) {
        $personas = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('cardexes', 'cardexes.id_alumno', 'alumnos.id')
        ->join('boletines', 'boletines.id_cardex', 'cardexes.id')
        ->select('personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat', 'cardexes.id AS idCardex', 'boletines.id AS idBoletin', 'alumnos.id AS idAlumno', 'cardexes.id_curso')
        ->where('cardexes.id_curso', '=', $request->id_curso)
        ->get();
        $materia = materias::join('profesores', 'profesores.id', 'materias.id_profesor')
        ->select('materias.*')
        ->where('profesores.id_usuario', '=', Auth::user()->id)
        ->first();
        return view('nota.create', compact('personas', 'materia'))->with('i');
    }

    public function store(Request $request) {
        $rules =[];
        for($i=1; $i<=$request->count; $i++){
            $rules['saber'.$i]      = 'required|numeric|between:0,100';
            $rules['ser'.$i]        = 'required|numeric|between:0,100';
            $rules['hacer'.$i]      = 'required|numeric|between:0,100';
            $rules['decidir'.$i]    = 'required|numeric|between:0,100';
        }
        $rules['nro_trimestre'] = 'required';

        $request->validate($rules);



        if ($request->nro_trimestre == 0)
            return back()->with('error', 'Debe seleccionar un trimestre');

        $bool = DB::table('notas')->where('notas.id_boletin', '=', $request->id_boletin1)
                                  ->where('notas.nro_trim', '=', $request->nro_trimestre)
                                  ->where('notas.id_materia', '=', $request->id_materia)
                                  ->first();
        
        if ($bool != []) 
            return redirect()->route('notas.show', $request->id_curso)->with('error', 'Ya hay notas ingresadas en el '.$request->nro_trimestre.'° trimestre');

        $i = 1;
        while ($i <= $request->count) {
            $ser = 'ser'.$i;
            $saber = 'saber'.$i;
            $hacer = 'hacer'.$i;
            $decidir = 'decidir'.$i;
            $boletin = 'id_boletin'.$i;
            $nota = new notas();
            $nota->nro_trim = $request->nro_trimestre;
            $nota->ser = $request->$ser;
            $nota->saber = $request->$saber;
            $nota->hacer = $request->$hacer;
            $nota->decidir = $request->$decidir;
            $nota->id_materia = $request->id_materia;
            $nota->id_boletin = $request->$boletin;
            $nota->nota_trimestral = ($nota->ser + $nota->saber + $nota->hacer + $nota->decidir) / 4;
            $nota->save();
            $i++;
        }

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Notas ingresadas del curso '.$request->id_curso.'° de secundaria');

        return redirect()->route('notas.show', $request->id_curso);
    }

    public function edit($id_curso) {
        return view('nota.edit', compact('id_curso'));
    }

    public function mod(Request $request) {
    
        $curso = cursos::findOrFail($request->id_curso);
        $profesor = DB::table('profesores')->where('id_usuario', '=', Auth::user()->id)->first();
        $materia = DB::table('materias')->where('id_profesor', '=', $profesor->id)->first();
        $trimestres = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('cardexes', 'cardexes.id_alumno', 'alumnos.id')
        ->join('boletines', 'boletines.id_cardex', 'cardexes.id')
        ->join('notas', 'notas.id_boletin', 'boletines.id')
        ->join('materias', 'materias.id', 'notas.id_materia')
        ->select('personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat', 'cardexes.id AS idCardex', 'boletines.id AS idBoletin', 'alumnos.id AS idAlumno', 'cardexes.id_curso', 'notas.ser', 'notas.saber', 'notas.hacer', 'notas.decidir', 'notas.nota_trimestral', 'notas.nro_trim', 'notas.id AS idNota', 'materias.nombre AS materiaNombre', 'cardexes.id_curso AS idCurso')
        ->where('cardexes.id_curso', '=', $curso->id)
        ->where('materias.id', '=', $materia->id)
        ->where('notas.nro_trim', '=', $request->nro_trim)
        ->get();
       // return $trimestres;
        if (empty($trimestres->first()))
            return back()->with('error', 'No existen notas a editar en este trimestre.');
        
        $actionform = route('notas.update', [$curso->id]);
        return view('nota.modificacion', compact('trimestres', 'actionform'))->with('i');
    }

    public function update( $id_curso, Request $request) {
        $rules =[];
        for($i=1; $i<=$request->count; $i++){
            $rules['saber'.$i]      = 'required|numeric|between:0,100';
            $rules['ser'.$i]        = 'required|numeric|between:0,100';
            $rules['hacer'.$i]      = 'required|numeric|between:0,100';
            $rules['decidir'.$i]    = 'required|numeric|between:0,100';
        }

        $request->validate($rules);

        $i = 1;

        while ($i <= $request->count) {
            $ser = 'ser'.$i;
            $saber = 'saber'.$i;
            $hacer = 'hacer'.$i;
            $decidir = 'decidir'.$i;
            $idNota = 'idNota'.$i; 

            $nota = notas::findOrFail($request->$idNota);
            $nota->ser = $request->$ser;
            $nota->saber = $request->$saber;
            $nota->hacer = $request->$hacer;
            $nota->decidir = $request->$decidir;
            $nota->nota_trimestral = ($nota->ser + $nota->saber + $nota->hacer + $nota->decidir) / 4;
            $nota->save();
            $i++;
        }

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Notas modicadas del curso '.$id_curso.'° de secundaria');

        return redirect()->route('notas.show', $id_curso)->with('success', 'Notas modificadas exitosamente');
    }
}
