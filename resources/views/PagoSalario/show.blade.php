@extends('layouts.home_plantilla')

@section('title', 'Vista Pagos')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
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
                                            <strong>Datos Personales</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Nombre completo: </span>{{$persona->nombre.' '.$persona->apellido_pat.' '.$persona->apellido_mat}} </p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b> {{$persona->ci}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Sexo: </b> {{$persona->sexo}}</p>
                                        </div>
                                        <div class="col m-2">
                                            <strong>Informacion</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Cuota: </span> {{$pagoSalario->nro_cuota}}° Mes</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Monto cancelado: </b> {{$pago->monto}} Bs.</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Fecha: </b> {{$pago->fecha}}</p>
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
</section>
@endsection
