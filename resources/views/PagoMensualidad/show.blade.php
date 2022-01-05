@extends('layouts.home_plantilla')

@section('css')
    <style>

        @media(max-width: 768px){
            section > div.col-9{
                padding: 0%;
                width: 95% !important;
            }
            
            .card-body > div > div,
            .card-body > div > div > div{
                padding: 0%;
                margin: 0%;
            }
        }

    </style>
@endsection
@section('title', 'Vista Pagos')

@section('navigation')
    <section class="row justify-content-center" id="main">
        <div class="col-9">
            <div class="card shadow mt-1">
                <div class="card-header text-center">
                    <h5 class="m-2">Recibo Pago Mensualidad</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-3 justify-content-around">
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-around">
                                            <div class="col m-2">
                                                <strong>Datos Tutor</strong>
                                                <p class="mb-1 "><span class="fw-bold text-secondary">Nombre
                                                        completo:
                                                    </span>{{ $persona->nombre . ' ' . $persona->apellido_pat . ' ' . $persona->apellido_mat }}
                                                </p>
                                                <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b>
                                                    {{ $persona->ci }}</p>
                                                <p class="mb-1"><b class="fw-bold  text-secondary">Parentesco:
                                                    </b> {{ $tutor->parentesco }}</p>
                                            </div>
                                            <div class="col m-2">
                                                <strong>Datos Alumno</strong>
                                                <p class="mb-1 "><span class="fw-bold text-secondary">Nombre
                                                        completo: </span>
                                                    {{ $personaAlumno->nombre . ' ' . $personaAlumno->apellido_pat . ' ' . $personaAlumno->apellido_mat }}
                                                </p>
                                                <p class="mb-1"><b class="fw-bold text-secondary">Codigo Rude:
                                                    </b> {{ $alumno->cod_rude }}</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col m-2">
                                                <strong>Acerca del pago</strong>
                                                <p class="mb-1 "><span class="fw-bold text-secondary">Cuota:
                                                    </span> {{ $pagoMen->nro_cuota }}° Mes</p>
                                                <p class="mb-1"><b class="fw-bold text-secondary">Monto cancelado:
                                                    </b> {{ $pago->monto }} Bs.</p>
                                                <p class="mb-1"><b class="fw-bold text-secondary">Fecha: </b>
                                                    {{ $pago->fecha }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('reporteMensualidad', $pagoMen->id) }}" type="button" class="btn btn-success">Imprimir</a>
                    </div>
                </div>
            </div>
        </div>
   
    </section>
@endsection
