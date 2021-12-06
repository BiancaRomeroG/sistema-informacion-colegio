@extends('layouts.home_plantilla')

@section('title', 'Profesor')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Profesores</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('profesor.create') }}"> Registrar nuevo</a>
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
                                <a class="btn btn-sm btn-primary" href="{{ route('profesor.show', $persona) }}">Ver</a>
                                <a class="btn btn-sm btn-secondary"
                                    href="{{ route('profesor.edit', $persona->id) }}">Editar</a>
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

