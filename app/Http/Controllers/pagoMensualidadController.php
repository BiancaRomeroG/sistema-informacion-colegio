<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagoMensualidad;
use App\Models\alumnos;
use App\Models\inscripciones;
use App\Models\pagoMensualidad;
use App\Models\pagos;
use App\Models\Persona;
use App\Models\tutores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

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
        $alumno = alumnos::find($id);
        if($alumno == null){
            $persona = null;
            $apoderado = null;
            $personaApoderado = null;
            $inscripcion = null;
            return view('pagoMensualidad.create', compact('id', 'alumno', 'persona', 'inscripcion', 'apoderado', 'personaApoderado'));
        }
        $persona = Persona::find($alumno->id_persona);
        $apoderado = tutores::find($alumno->id_tutor);
        $personaApoderado = Persona::find($apoderado->id_persona);
        $inscripcion = DB::table('inscripciones')->where('inscripciones.id_alumno', $alumno->id)->first();
        return view('pagoMensualidad.create', compact('id', 'alumno', 'persona', 'inscripcion', 'apoderado', 'personaApoderado'));
    }

    public function store(StorePagoMensualidad $request) {
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

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Pago Mensualidad registrado ID: '.$pagoMen->id);

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

    public function generarReporte(Request $request, $id)
    {
        $pagoMen = pagoMensualidad::findOrFail($id);
        $pago = pagos::findOrFail($pagoMen->id_pago);
        $tutor = tutores::findOrFail($pagoMen->id_tutor);
        $persona = Persona::findOrFail($tutor->id_persona);
        $alumno = alumnos::where('id_tutor', $tutor->id)->first();
        $personaAlumno = Persona::where('id', $alumno->id_persona)->first();
        $data = [
            'pagoMen' => $pagoMen,
            'pago' => $pago,
            'tutor' => $tutor,
            'personaTutor' => $persona,
            'alumno' => $alumno,
            'personaAlumno' => $personaAlumno
        ];
          
        $pdf = PDF::loadView('pagoMensualidad.reporte', $data);

        return $pdf->download('reporteMensualidad.pdf');
    
    }

    public function PDFList(){
             
        $meses = [
            0 => 'Febrero',
            1 => 'Marzo',
            2 => 'Abril',
            3 => 'Mayo',
            4 => 'Junio',
            5 => 'Julio',
            6 => 'Agosto',
            7 => 'Septiembre',
            8 => 'Octubre',
            9 =>  'Noviembre',
        ];
        $pagos = [];
        for($i = 1; $i<=10; $i++){
            if(pagoMensualidadController::existePago($i)){
                $consultaPagos = pagoMensualidad::where('nro_cuota', '=', $i);

                $pagos[] = Persona::join('alumnos','alumnos.id_persona', 'personas.id')
                ->join('tutores','tutores.id', 'alumnos.id_tutor')
                ->join('personas as tutorPersonas', 'tutorPersonas.id', '=', 'tutores.id_persona')
                ->leftJoinSub($consultaPagos, 'pagosMensualidades', function($join){
                    $join->on('pagosMensualidades.id_tutor','=', 'tutores.id');
                })->leftjoin('pagos', 'pagos.id', 'pagosMensualidades.id_pago')
               // ->where('pago_salarios.nro_pago', $i)
                ->select('personas.*', 'pagos.monto as monto','tutorPersonas.nombre as nombre_tutor',
                'tutorPersonas.apellido_pat as apellido_pat_tutor', 'tutorPersonas.apellido_mat as apellido_mat_tutor',
                'pagos.fecha as fechaPago','pagosMensualidades.nro_cuota as nro_cuota','alumnos.cod_rude as cod_rude')
                ->orderBy('personas.apellido_pat','asc')->get(); 
            }
        }
        $pagos = collect($pagos);
        $pdf = PDF::loadView('PagoMensualidad.indexPDF',['pagos' => $pagos, 'meses' => $meses])->setPaper('a4', 'landscape');
        $tittle = 'Mensualidades'.Date('Y').'pdf';
       // return $pagos;
        //return $pdf->stream();
        return $pdf->download($tittle);
    }

    static public function existePago($cuota){
        $pago = pagoMensualidad::where('nro_cuota', '=', $cuota)->first();
        return !empty($pago);
    }
}
