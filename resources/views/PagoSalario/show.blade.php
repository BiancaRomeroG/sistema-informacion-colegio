@extends('layouts.home_plantilla')

@section('title', 'Vista Pagos')
@section('css')
    <style>

        @media(max-width: 768px){
            section > div.col-9{
                padding: 0%;
                width: 95% !important;
            }

            section > div.col-9 > .card{
                margin: 0% !important;
            }
            
            .card-body > div > div,
            .card-body > div > div > div{
                padding: 0%;
                margin: 0%;
            }
        }

    </style>
@endsection
@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Pago Salarios</h5>
            </div>
            <div class="card-body p-4">
                <div class="row mb-3 justify-content-around">
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col m-2">
                                            <strong>Datos Profesor</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Nombre completo: </span>{{$persona->nombre.' '.$persona->apellido_pat.' '.$persona->apellido_mat}} </p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b> {{$persona->ci}}</p>
                                        </div>
                                        
                                    </div>
                                    <div class="row justify-content-around">
                                        <div class="col m-2">
                                            <strong>Acerca del Pago</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Cuota: </span> {{$pagoSalario->nro_pago}}° Mes</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Fecha: </b> {{$pago->fecha}}</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Monto bruto: </b> {{$pago->monto}} Bs.</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Descuento IVA: </b> {{$pagoSalario->descuento_iva}} Bs.</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Aporte AFP: </b> {{$pagoSalario->aporte_afp}} Bs.</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Monto neto: </b> {{$pago->monto - $pagoSalario->descuento_iva - $pagoSalario->aporte_afp}} Bs.</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('reporteSalario', $pagoSalario->id) }}" type="button" class="btn btn-success">Imprimir</a>
    </div>
</section>
@endsection
