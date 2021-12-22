@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-8 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Alumnos</h2>
                </div>
                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('alumno.create') }}"> Registrar nuevo</a>
                </div>
                @endif
            </div>
            <table class="table table-hover table-bordered">
                <thead class="table-light">
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
                                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                                <a class="btn btn-sm btn-secondary"
                                    href="{{ route('alumno.edit', $persona->id) }}">Editar</a>
                                @endif
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
@endsection
