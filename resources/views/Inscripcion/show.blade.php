@extends('layouts.home_plantilla')
@section('css')
    <style>
        @media(max-width: 768px){
            div div.col-10{
                width: 93%;
            }

            div
        }
    </style>
@endsection
@section('title', 'Vista inscripcion')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow mt-1">
            <div class="card-header text-center">
                <h5 class="m-2">Inscripción alumno</h5>
            </div>
            <div class="card-body p-4">
                <div class="row mb-3 justify-content-around">
                    <div class="col m-2 alert alert-info">
                        <p class="mb-1">Código del alumno: {{$alumno->id}}</p>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col m-2">
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Nombre completo: </span> {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b> {{$persona->ci}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Sexo: </b> {{$persona->sexo}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Fecha Nacimiento: </b> {{$persona->fecha_nac}}</p>
                                        </div>
                                        <div class="col m-2">
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Dirección: </span> {{$persona->direccion}}</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Email: </b> {{$persona->email}}</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Telefono: </b> {{$persona->telefono}}</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Código Rude: </b> {{$alumno->cod_rude}}</p>
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