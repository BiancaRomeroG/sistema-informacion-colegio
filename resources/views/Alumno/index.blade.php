@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Alumnos</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('alumno.create') }}"> Registrar nuevo</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('alumno.show', $persona) }}">Ver</a>
                                <a class="btn btn-sm btn-secondary"
                                    href="{{ route('alumno.edit', $persona->id) }}">Editar</a>
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

    {{-- <div class="card">
            <table class="table" >
                <caption>List of studets</caption>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>apellidos</th>
                    <th>Acciones</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat}}</td>
                            <td>
                                <a href="{{route('alumno.show', $persona)}}">ver</a> 
                                <a href="{{route('alumno.edit', $persona->id)}}">editar</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
@endsection
