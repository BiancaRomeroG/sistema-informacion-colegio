<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\cursos;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

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
            return redirect()->route('curso.index',['gestion' => Date('Y')])->with('error', 'Gestion inexistente');
        }    

        return view('curso.index', compact('cursos','gestion'));
    }


    public function create(){
        return view('curso.create');
    }

    public function store(Request $request){

        $curso = cursos::create([
            'nivel' => $request->nivel,
            'cupo_max' => $request->cupos_max,
            'cant_alumnos' => 0,
        ]
        ); 

        $curso->save();
        
    }

    public function show($id, $gestion){
        $curso = cursos::findOrFail($id);
        //$gestion = $request->gestion;
        $alumnos = alumnos::join('inscripciones', 'inscripciones.id_alumno','alumnos.id')
        ->where('inscripciones.id_curso','=', $curso->id)
        ->whereYear('inscripciones.fecha', '=', $gestion)
        ->get();
        $personas = [];
        foreach($alumnos as $alumno){
            $personas[] = Persona::findOrFail($alumno->id_persona);
        }
        return view('Curso.show', compact('personas','curso','gestion'));
    }

    public function edit($id){
        $curso = cursos::findOrFail($id);
        return view('Curso.edit', compact('curso'));
    }
    
    public function update($id, Request $request){
        $curso = cursos::findOrFail($id);
        $curso->cupo_max = $request->cupos_max;
        $curso->save();
        $cursos = cursos::all();
        return redirect()->route('curso.index',['gestion' => Date('Y')])->with('succes', 'Curso editado correctamente');
    }
}
