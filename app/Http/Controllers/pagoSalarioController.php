<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePagoSalario;
use App\Models\pagoSalarios;
use App\Models\pagos;
use App\Models\profesores;
use App\Models\Persona;
use Carbon\Carbon;
use Database\Seeders\PersonaSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class pagoSalarioController extends Controller
{
    public function index() {
        $personas = Persona::join('profesores', 'id_persona', 'personas.id')
        ->join('pago_salarios', 'pago_salarios.id_profesor', 'profesores.id')
        ->join('pagos', 'pagos.id', 'pago_salarios.id_pago')
        ->select('personas.*', 'pago_salarios.id AS idPago', 'pago_salarios.nro_pago', 'pagos.monto')
        ->orderBy('idPago', 'desc')->paginate(14);
        return view('pagoSalario.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 14);
    }

    public function create(Request $request) {
        $id = $request->id != null? trim($request->id):1;
        $profesor = profesores::find($id);
        if($profesor == null){
            $persona = null;
            return view('pagoSalario.create', compact('id', 'profesor', 'persona'));
        }
        $persona = Persona::findOrFail($profesor->id_persona);
        return view('pagoSalario.create', compact('id', 'profesor', 'persona'));
    }

    public function store(StorePagoSalario $request) {
        $pago = pagos::create([
            'monto' => $request->monto,
            'fecha' => Carbon::now()->format('Y,m,d')
        ]);
        $pago->save();
        
        $pagoSalario = pagoSalarios::create([
            'id_pago' => $pago->id,
            'nro_pago' => $request->pago,
            'id_profesor' => $request->id_profesor,
            'descuento_iva' => number_format($request->monto * (12.5 / 100), 2),
            'aporte_afp' => number_format($request->monto * (12.71 / 100), 2)
        ]);
        $pagoSalario->save();
        $id = $pago->id_pago;

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Pago Salario registrado ID: '.$pagoSalario->id);

        return redirect()->route('salario.index')->with(
            'success',
            'Pago registrado correctamente'
        );
    }

    public function show($id) {
        $pagoSalario = pagoSalarios::findOrFail($id);
        $pago = pagos::findOrFail($pagoSalario->id_pago);
        $profesor = profesores::findOrFail($pagoSalario->id_profesor);
        $persona = Persona::findOrFail($profesor->id_persona);
        return view('pagoSalario.show', compact('persona', 'pago', 'profesor', 'pagoSalario'));
    }

    public function generarReporte(Request $request, $id)
    {
        $pagoSalario = pagoSalarios::findOrFail($id);
        $pago = pagos::findOrFail($pagoSalario->id_pago);
        $profesor = profesores::findOrFail($pagoSalario->id_profesor);
        $persona = Persona::findOrFail($profesor->id_persona);
        $data = [
            'pagoSalario' => $pagoSalario,
            'pago' => $pago,
            'profesor' => $profesor,
            'persona' => $persona,
        ];
          
        $pdf = PDF::loadView('pagoSalario.reporte', $data);

        return $pdf->download('reporteSalario.pdf');
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
            if(pagoSalarioController::existePago($i)){
                $consultaPagos = pagoSalarios::where('nro_pago', '=', $i);

                $pagos[] = Persona::join('profesores','profesores.id_persona', 'personas.id')
                ->leftJoinSub($consultaPagos, 'pagosSalarios', function($join){
                    $join->on('pagosSalarios.id_profesor','=', 'profesores.id');
                })->leftjoin('pagos', 'pagos.id', 'pagosSalarios.id_pago')
               // ->where('pago_salarios.nro_pago', $i)
                ->select('personas.*', 'profesores.profesion as profesion', 'pagos.monto as monto', 'pagos.fecha as fechaPago','pagosSalarios.nro_pago as nro_pago')
                ->orderBy('personas.apellido_pat','asc')->get(); 
            }
        }
        $pagos = collect($pagos);
        $pdf = PDF::loadView('PagoSalario.indexPDF',['pagos' => $pagos, 'meses' => $meses])->setPaper('a4', 'landscape');
        $tittle = 'Salarios'.Date('Y').'pdf';
        //return $pagos;
       // return $pdf->stream();
        return $pdf->download($tittle);
    }


    static public function existePago($mes){
        $pagoSalario = pagoSalarios::where('nro_pago', $mes)->first();
        return !empty($pagoSalario);
    }
}
