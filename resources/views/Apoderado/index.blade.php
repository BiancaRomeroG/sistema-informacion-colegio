@extends('layouts.home_plantilla')

@section('title', 'Apoderados')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Apoderados</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('apoderado.create') }}"> Registrar nuevo</a>
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
                                <a class="btn btn-sm btn-primary" href="{{ route('apoderado.show', $persona->idTutor) }}">Ver</a>
                                <a class="btn btn-sm btn-secondary"
                                    href="{{ route('apoderado.edit', $persona->idTutor) }}">Editar</a>
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
