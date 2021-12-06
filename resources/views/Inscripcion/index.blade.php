@extends('layouts.home_plantilla')

@section('title', 'Vista principal de Inscripciones')

@section('navigation')
<form action="{{route('inscripcion.index')}}" method="GET">
@csrf
<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2>Lista de Alumnos</h2>
            </div>
            <!--<div class="col text-end">
                <select name="select">
                    <option selected>Seleccione un curso</option>
                    <option value="1">1° Secundaria</option>
                    <option value="2">2° Secundaria</option>
                    <option value="3">3° Secundaria</option>
                    <option value="4">4° Secundaria</option>
                    <option value="5">5° Secundaria</option>
                    <option value="6">6° Secundaria</option>
                </select>
            </div>-
            <div class="col">
                <button type="submit">Mostrar</button>
            </div>-->
            <div class="col text-end">
                <a class="btn btn-sm btn-success" href="{{ route('inscripcion.create') }}">Nueva Inscripcion</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Curso</th>
                    <th width="120px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                        <td>{{ $persona->curso }}°</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('inscripcion.show', $persona->idAlumno) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $personas->links() !!}
        </div>
    </div>
</div>  
</form>
@endsection