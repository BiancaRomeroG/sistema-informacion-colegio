<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApoderado;
use App\Models\Persona;
use App\Models\tutores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class apoderadoController extends Controller
{
    public function index()
    {
        $personas = Persona::join('tutores', 'personas.id', 'tutores.id_persona')
            ->select('tutores.id as idTutor', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')
            ->orderBy('idTutor', 'desc')->get();
        return view('Apoderado.index', compact('personas'))->with('i');
    }

    public function show($tutorId)
    {

        $tutor = tutores::findOrFail($tutorId);

        if ($tutor == null)
            return redirect()->route('apoderado.index')->with('error', 'No se encontraron los datos del apoderado');

        $persona = Persona::join('tutores', 'tutores.id_persona', 'personas.id')
        ->where('tutores.id', '=', $tutor->id)
        ->select('personas.*', 'tutores.id AS idTutor', 'tutores.parentesco')
        ->first();

        $alumnos = Persona::join('alumnos', 'alumnos.id_persona', 'personas.id')
        ->where('alumnos.id_tutor', '=', $tutor->id)
        ->get();

        return view('Apoderado.show', compact('persona', 'alumnos'));

    }

    public function create()
    {
        $actionform = route('apoderado.store');
        return view('Apoderado.create', compact('actionform'));
    }

    public function store(StoreApoderado $request)
    {
        $persona = Persona::create([
            'nombre'       => $request->nombre,
            'apellido_pat' => $request->apellido_pat,
            'apellido_mat' => $request->apellido_mat,
            'ci'           => $request->ci,
            'fecha_nac'    => $request->fecha_nac,
            'sexo'         => $request->sexo,
            'email'        => $request->email,
            'direccion'    => $request->direccion,
            'telefono'     => $request->telefono,
        ]);
        $persona->save();

        $apoderado = tutores::create([
            'id_persona' => $persona->id,
            'parentesco' => $request->parentesco,
        ]);
        $apoderado->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Apoderado registrado ID: '.$apoderado->id);

        return redirect()->route('apoderado.index')->with(
            'success',
            'Apoderado creado correctamente'
        );
    }

    public function destroy($id)
    {
        $tutor = tutores::findOrFail($id);
        $tutor->delete();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Apoderado eliminado ID: '.$tutor->id);

        return redirect()->route('apoderado.index')->with('success', 'Apoderado eliminado correctamente');
    }

    public function edit($id)
    {
        $tutor = tutores::findOrFail($id);
        $persona = Persona::findOrFail($tutor->id_persona);
        $actionform = route('Apoderado.update', $tutor);
        return view('Apoderado.edit', compact('tutor', 'persona', 'actionform'));
    }

    public function update($tutorId, StoreApoderado $request)
    {
        $tutor = tutores::findOrfail($tutorId);
        $persona = Persona::findOrfail($tutor->id_persona);

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

        $tutor = tutores::findOrfail($tutorId);
        $tutor->parentesco = $request->parentesco;
        $tutor->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de datos del apoderado ID: '.$tutor->id);

        return redirect()->route('apoderado.show', $tutor->id)->with('success', 'Apoderado editado correctamente');
    }
}
