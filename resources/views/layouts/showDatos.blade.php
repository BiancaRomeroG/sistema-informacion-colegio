@extends('layouts.home_plantilla')

@section('title', 'Listado')
@section('css')
    <style>
        @media(max-width: 768px){
             
            #contenido-datos{
                width: 100% !important;
            }   
            .card-body.p-4{
                padding: 0% !important;
            }
        }

    </style>
@endsection
@section('navigation')
    <section class="row justify-content-center" id="main">
        <div id = "contenido-datos" class="col-10">
            <div class="card shadow mt-1">
                <div class="card-header text-center">
                    <h5 class="m-2">Datos personales</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-3 justify-content-around">
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <div class="col m-2 alert alert-info">
                                    @if ($persona->idAlumno != null)
                                        <p class="mb-1">ID del alumno: {{ $persona->idAlumno }}</p>
                                    @endif

                                    @if ($persona->idProfesor != null)
                                        <p class="mb-1">ID del Profesor: {{ $persona->idProfesor }}</p>
                                    @endif

                                    @if ($persona->idAdministrativo != null)
                                        <p class="mb-1">ID del Admministrativo: {{ $persona->idAdministrativo }}
                                        </p>
                                    @endif

                                    @if ($persona->idTutor != null)
                                        <p class="mb-1">ID del Apoderado: {{ $persona->idTutor }}</p>
                                    @endif

                                    @if ($persona->idUsuario != null)
                                        <p class="mb-1">ID del Usuario: {{ $persona->idUsuario }}</p>
                                    @endif
                                </div>
                                <div class="container m-3">
                                    <h3>Informacion Personal</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-around">
                                            <div class="col m-2">
                                                <p class="mb-1 "><span class="fw-bold text-secondary">Nombre
                                                        completo: </span> {{ $persona->nombre }}
                                                    {{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</p>
                                                <p class="mb-1"><b class="fw-bold  text-secondary">CI: </b>
                                                    {{ $persona->ci }}</p>
                                                <p class="mb-1"><b class="fw-bold  text-secondary">Sexo: </b>
                                                    {{ $persona->sexo }}</p>
                                                <p class="mb-1"><b class="fw-bold  text-secondary">Fecha
                                                        Nacimiento: </b> {{ \Carbon\Carbon::parse($persona->fecha_nac)->format('d/m/Y') }}</p>
                                            </div>
                                            <div class="col m-2">
                                                <p class="mb-1 "><span class="fw-bold text-secondary">Dirección:
                                                    </span> {{ $persona->direccion }}</p>
                                                <p class="mb-1"><b class="fw-bold text-secondary">Email: </b>
                                                    {{ $persona->email }}</p>
                                                <p class="mb-1"><b class="fw-bold text-secondary">Telefono: </b>
                                                    {{ $persona->telefono }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container m-3">
                                    <h3>Informacion Adicional</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-around">
                                            <div class="col m-2">
                                                @section('info-adicional-col1')
                                                @show
                                            </div>
                                            <div class="col m-2">
                                                @section('info-adicional-col2')
                                                @show
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @section('botones')
                                @show
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
