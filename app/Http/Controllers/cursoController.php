<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\alumnos;
use App\Models\cursos;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cursoController extends Controller
{

    public function index(Request $request){
        $gestion = $request->gestion;
        $cursoA = cursos::all();

       // return $request;
        if($gestion == Date('Y')){
            $cursos = $cursoA;
            return view('Curso.index',compact('cursos','gestion'));
        }

        foreach ($cursoA as $curso){
            $curso->cant_alumnos = $curso->cant_alumnos($gestion); 
        }
        $cursos = $cursoA;

        $cursos = $cursos->filter( function($curso){return $curso->cant_alumnos !=0;
            });

        if(empty($cursos->all())){
            return redirect()->route('curso.index',['gestion' => Date('Y')]);
        }    

        return view('Curso.index', compact('cursos','gestion'));
    }


    public function create(){
        return view('Curso.create');
    }

    public function store(StoreCurso $request){
        $curso = cursos::create([
            'nivel' => $request->nivel,
            'cupo_max' => $request->cupos_max,
            'cant_alumnos' => 0,
        ]); 
        $curso->save();
        
        bitacoraController::bitacoraRegister(Auth::user()->id, 'Curso creado ID: '.$curso->id);

        return redirect()->route('Curso.index')->with('success', 'Curso creado correctamente');
    }

    public function show($id){
        $curso = cursos::findOrFail($id);
        $personas = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('inscripciones', 'inscripciones.id_alumno', 'alumnos.id')
        ->where('inscripciones.id_curso', '=', $curso->id)
        ->get();
        return view('Curso.show', compact('personas', 'id'));
    }

    public function edit($id){
        $curso = cursos::findOrFail($id);
        return view('Curso.edit', compact('curso'));
    }
    
    public function update($id, StoreCurso $request){
        $curso = cursos::findOrFail($id);
        $curso->cupo_max = $request->cupos_max;
        $curso->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de curso ID: '.$curso->id);

        return redirect()->route('Curso.index',['gestion' => Date('Y')])->with('succes', 'Curso editado correctamente');
    }

    static public function cant_alumnos($id_curso) {
        $curso = cursos::findOrFail($id_curso);
        return $curso->cant_alumnos;
    }

    static public function cupo_max($id_curso) {
        $curso = cursos::findOrFail($id_curso);
        return $curso->cupo_max;
    }
}
