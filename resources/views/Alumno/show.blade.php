@extends('layouts.home_plantilla')

@section('title', 'Listado de alumnos')
    
@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow m-5">
            <div class="card-header">
                <h5 class="m-2">Informacion Personal</h5>
            </div>
            <div class="card-body p-4">
                <div class="row mb-4">
                    <strong>
                        Nombre:
                    </strong>
                    <label>
                        {{$alumno->nombre}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Apellido Paterno:
                    </strong>
                    <label>
                        {{$alumno->apellido_pat}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Apellido Materno:
                    </strong>
                    <label>
                        {{$alumno->apellido_mat}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Género:
                    </strong>
                    <label>
                        {{$alumno->sexo}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Fecha de Nacimiento:
                    </strong>
                    <label>
                        {{$alumno->fecha_nac}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Email:
                    </strong>
                    <label>
                        {{$alumno->email}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Dirección:
                    </strong>
                    <label>
                        {{$alumno->direccion}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Teléfono:
                    </strong>
                    <label>
                        {{$alumno->telefono}}
                    </label>
                </div>
                <div class="row mb-4">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection