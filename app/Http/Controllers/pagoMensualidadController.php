<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use App\Models\inscripciones;
use App\Models\pagoMensualidad;
use App\Models\pagos;
use App\Models\Persona;
use App\Models\tutores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagoMensualidadController extends Controller
{
    public function index() {
        $personas = Persona::join('alumnos', 'id_persona', 'personas.id')
        ->join('tutores', 'tutores.id', 'alumnos.id_tutor')
        ->join('pago_mensualidads', 'pago_mensualidads.id_tutor', 'tutores.id')
        ->join('pagos', 'pagos.id', 'pago_mensualidads.id_pago')
        ->select('personas.*', 'pago_mensualidads.id AS idPago', 'pago_mensualidads.nro_cuota', 'pagos.monto')
        ->orderBy('idPago', 'desc')->paginate(14);
        return view('pagoMensualidad.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 14);
    }

    public function create(Request $request) {
        $id = $request->id != null? trim($request->id):1;
        $alumno = alumnos::findOrFail($id);
        $persona = Persona::findOrFail($alumno->id_persona);
        $apoderado = tutores::findOrFail($alumno->id_tutor);
        $personaApoderado = Persona::findOrFail($apoderado->id_persona);
        $inscripcion = DB::table('inscripciones')->where('inscripciones.id_alumno', $alumno->id)->first();
        return view('pagoMensualidad.create', compact('id', 'alumno', 'persona', 'inscripcion', 'apoderado', 'personaApoderado'));
    }

    public function store(Request $request) {
        $pago = pagos::create([
            'monto' => $request->monto,
            'fecha' => Carbon::now()->format('Y,m,d')
        ]);
        $pago->save();

        $pagoMen = pagoMensualidad::create([
            'id_pago' => $pago->id,
            'nro_cuota' => $request->cuota,
            'id_tutor' => $request->id_tutor
        ]);
        $pagoMen->save();
        return redirect()->route('mensualidad.show', $pagoMen->id);
    }

    public function show($id) {
        $pagoMen = pagoMensualidad::findOrFail($id);
        $pago = pagos::findOrFail($pagoMen->id_pago);
        $tutor = tutores::findOrFail($pagoMen->id_tutor);
        $persona = Persona::findOrFail($tutor->id_persona);
        $alumno = alumnos::where('id_tutor', $tutor->id)->first();
        $personaAlumno = Persona::where('id', $alumno->id_persona)->first();
        return view('pagoMensualidad.show', compact('persona', 'pago', 'tutor', 'pagoMen', 'alumno', 'personaAlumno'));
    }
}
