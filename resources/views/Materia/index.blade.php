@extends('layouts.home_plantilla')

@section('title', 'Test')

@section('navigation')
    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Materias</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('materia.create') }}"> Registrar nueva</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Profesor</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materias as $materia)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $materia->nombre }}</td>
                            <td>{{ $materia->descripcion }}</td>
                            <td>{{ $materia->nombrePersona }} {{ $materia->apellido_pat }} {{ $materia->apellido_mat }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('materia.show', $materia->idMateria) }}">Ver</a>
                                <a class="btn btn-sm btn-secondary"
                                    href="{{ route('materia.edit', $materia->idMateria) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $materias->links() !!}
            </div>
        </div>
    </div>

@endsection
