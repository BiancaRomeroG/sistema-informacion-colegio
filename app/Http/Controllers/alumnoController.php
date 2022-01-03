<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumno;
use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\boletines;
use App\Models\cardex;
use App\Models\inscripciones;
use App\Models\notas;
use App\Models\tutores;
use App\Models\Persona;
use Brick\Math\BigInteger;
use Illuminate\Support\Facades\Auth;

class alumnoController extends Controller
{
    public function index()
    {
        $personas = Persona::join('alumnos', 'personas.id', 'alumnos.id_persona')
            ->select('alumnos.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')
            ->orderBy('id', 'desc')->get();
        return view('Alumno.index', compact('personas'))->with('i');
    }

    public function show($alumno)
    {
        $alumno = alumnos::findOrFail($alumno);
        $personaAlumno = Persona::find($alumno->id_persona);
        $persona = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->join('tutores', 'tutores.id', 'alumnos.id_tutor')
        ->where('alumnos.id', '=', $alumno->id)
        ->select('personas.*', 'alumnos.id AS idAlumno', 'alumnos.cod_rude', 'tutores.id as idApoderado')
        ->first();
        $personaTutor = Persona::join('tutores', 'tutores.id_persona', 'personas.id')
        ->where('tutores.id', '=', $persona->idApoderado)
        ->first();
        return view('Alumno.show', compact('persona', 'personaTutor'));
    }

    public function destroy($id)
    {
        $alumno = alumnos::findOrFail($id);
        $persona = Persona::findOrFail($alumno->id_persona);
        $persona->delete();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Alumno eliminado. ID: '.$alumno->id);

        return redirect()->route('Alumno.index')->with('success', 'Alumno eliminado correctamente');
    }

    public function create()
    {
        $tutores = Persona::join('tutores', 'personas.id', 'tutores.id_persona')
            ->select('tutores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $actionform = route("alumno.store");
        return view('Alumno.create', compact('actionform', 'tutores'));
    }

    public function store(StoreAlumno $request)
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

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Alumno registrado ID: '.$alumno->id);

        return redirect()->route('Alumno.index')->with(
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

    public function update(alumnos $alumno, StoreAlumno $request)
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

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de datos del alumno ID: '.$alumno->id);

        return redirect()->route('Alumno.show', $alumno->id)->with('success', 'Alumno editado correctamente');
    }
}
