@extends('layouts.home_plantilla')

@section('title', 'Administrativo')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-11 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Lista de Administrativos</h2>
                </div>
                <div class="col d-flex justify-content-end align-items-center text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('administrativo.create') }}"> Registrar nuevo</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-round-blue table-striped ">
                    <thead class="table-head">
                        <tr>
                            <th width = "5rem">Nro</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th width="120px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('administrativo.show', $persona->id) }}">Ver</a>
                                    <a class="btn btn-sm btn-secondary"
                                        href="{{ route('administrativo.edit', $persona->id) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
@endsection