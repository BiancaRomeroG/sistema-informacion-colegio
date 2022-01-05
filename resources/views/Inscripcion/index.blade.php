@extends('layouts.home_plantilla')

@section('css')
    <style>
        @media(max-width: 768px){
            div div.col-9{
                width: 93%;
            }
        }
    </style>
@endsection
@section('title', 'Vista principal de Inscripciones')

@section('navigation')
<form action="{{route('inscripcion.index')}}" method="GET">
@csrf
<div class="row justify-content-center">
    <div class="col-9 mt-1 card">
        <div class="row justify-content-between mb-2 card-header">
            <div class="col">
                <h2>Lista de Alumnos Inscritos</h2>
            </div>
            <div class="col d-flex justify-content-end align-items-center text-end">
                <a class="btn btn-sm btn-success" href="{{ route('inscripcion.create') }}">Nueva Inscripcion</a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-round-blue table-striped">
                <thead class="table-head">
                    <tr>
                        <th width = "5%">Nro</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Curso</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                            <td>{{ $persona->curso }}° Secundaria</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('inscripcion.show', $persona->idAlumno) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      
    </div>
</div>  
</form>
@endsection