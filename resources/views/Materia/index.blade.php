@extends('layouts.home_plantilla')

@section('title', 'Test')

@section('navigation')
    <div class="row justify-content-center">
        <div class="col-10 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Lista de Materias</h2>
                </div>
                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                <div class="col d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-success" href="{{ route('materia.create') }}"> Registrar nueva</a>
                </div>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-round-blue">
                    <thead class="table-head">
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
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $materia->nombre }}</td>
                                <td>{{ $materia->descripcion }}</td>
                                <td>{{ $materia->nombrePersona }} {{ $materia->apellido_pat }} {{ $materia->apellido_mat }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('materia.show', $materia->idMateria) }}">Ver</a>
                                    @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                                    <a class="btn btn-sm btn-secondary"
                                        href="{{ route('materia.edit', $materia->idMateria) }}">Editar</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script>
  
    $(document).ready(function() {
        $('.table-round-blue').DataTable({
            destroy: true,
            paging: false,
            searching: false,
            ordering: false,
            info: false
        });
    });
</script>
@endsection