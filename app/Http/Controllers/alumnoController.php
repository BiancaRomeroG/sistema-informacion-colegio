<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\boletines;
use App\Models\cardex;
use App\Models\inscripciones;
use App\Models\notas;
use App\Models\tutores;
use App\Models\Persona;
use Brick\Math\BigInteger;

class alumnoController extends Controller
{
    public function index()
    {
        $personas = Persona::join('alumnos', 'personas.id', 'alumnos.id_persona')
            ->select('alumnos.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')
            ->orderBy('id', 'desc')->paginate(14);
        return view('alumno.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 14);
    }

    public function show($alumno)
    {
        $alumno = alumnos::find($alumno);
        $persona = Persona::find($alumno->id_persona);
        $tutor = tutores::find($alumno->id_tutor);
        $personaTutor = Persona::find($tutor->id_persona);
        return view('alumno.show', compact('persona', 'alumno', 'tutor', 'personaTutor'));
    }

    public function destroy($id)
    {
        $alumno = alumnos::findOrFail($id);
        $persona = Persona::findOrFail($alumno->id_persona);

        $inscripciones = inscripciones::where('id_alumno', $id)
            ->get();
        foreach ($inscripciones as $inscripcion) {
            $inscripcion->delete();
        }

        $cardex = cardex::where('id_alumno', $alumno->id)
            ->first();

        $boletin = boletines::where('id_cardex', $cardex->id)
        ->first();

        $notas = notas::where('id_boletin', $boletin->id)
            ->get();
        foreach ($notas as $nota) {
            $nota->delete();
        }

        $boletin->delete();
        $cardex->delete();
        
        $inscripciones = inscripciones::where('id_alumno', $id)
            ->get();
        foreach ($inscripciones as $inscripcion) {
            $inscripcion->delete();
        }
        $cardex->delete();
        $alumno->delete();
        $persona->delete();
        return redirect()->route('alumno.index')->with('success', 'Alumno eliminado');
    }

    public function create()
    {
        $tutores = Persona::join('tutores', 'personas.id', 'tutores.id_persona')
            ->select('tutores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $actionform = route("alumno.store");
        return view('alumno.create', compact('actionform', 'tutores'));
    }

    public function store(Request $request)
    {
        $persona = Persona::create([
            'nombre' => $request->nombre,
            'apellido_pat' => $request->apellido_pat,
            'apellido_mat' => $request->apellido_mat,
            'ci' => $request->ci,
            'fecha_nac' => $request->fecha_nac,
            'sexo' => $request->sexo,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
        ]);
        $persona->save();
        $alumno = new alumnos();
        $alumno->id_persona = $persona->id;
        $alumno->cod_rude = $request->codrude;
        $alumno->id_tutor = $request->tutor_id;
        $alumno->save();
        return redirect()->back()->with(
            'success',
            'Alumno creado correctamente'
        );
    }

    public function edit($id)
    {
        $alumno = alumnos::findOrFail($id);
        $persona = Persona::findOrFail($alumno->id_persona);
        $tutores = Persona::join('tutores', 'personas.id', 'tutores.id_persona')
            ->select('tutores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $tutorid = tutores::findOrfail($alumno->id_tutor)->id;
        $actionform = route('alumno.update', [$alumno->id]);
        return view('Alumno.edit', compact('alumno', 'persona', 'tutores', 'tutorid', 'actionform'));
    }

    public function update(alumnos $alumno, Request $request)
    {


        $persona = Persona::findOrfail($alumno->id_persona);

        $persona->nombre = $request->nombre;
        $persona->apellido_pat = $request->apellido_pat;
        $persona->apellido_mat = $request->apellido_mat;
        $persona->ci = $request->ci;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->sexo = $request->sexo;
        $persona->email = $request->email;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;

        $persona->save();

        $alumno->cod_rude = $request->codrude;
        $alumno->id_tutor = $request->tutor_id;
        $alumno->save();

        return redirect()->route('alumno.show', $alumno->id);
    }
}
