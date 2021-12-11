<?php

namespace App\Http\Controllers;
use App\Models\pagoSalarios;
use App\Models\pagos;
use App\Models\profesores;
use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $profesor = profesores::findOrFail($id);
        $persona = Persona::findOrFail($profesor->id_persona);
        return view('pagoSalario.create', compact('id', 'profesor', 'persona'));
    }

    public function store(Request $request) {
        $pago = pagos::create([
            'monto' => $request->monto,
            'fecha' => Carbon::now()->format('Y,m,d')
        ]);
        $pago->save();
        
        $pagoSalario = pagoSalarios::create([
            'id_pago' => $pago->id,
            'nro_pago' => $request->pago,
            'id_profesor' => $request->id_profesor
            //iva
            //afp
        ]);
        $pagoSalario->save();
        $id = $pago->id_pago;
        return redirect()->route('salario.index')->with(
            'success',
            'Pago registrado correctamente'
        );
    }

    public function show($id) {
        return $id;
        $pagoSalario = pagoSalarios::findOrFail($id);
        $pago = pagos::findOrFail($pagoSalario->id_pago);
        $profesor = profesores::findOrFail($pagoSalario->id_profesor);
        $persona = Persona::findOrFail($profesor->id_persona);
        return view('pagoSalario.show', compact('persona', 'pago', 'profesor', 'pagoSalario'));
    }

}
