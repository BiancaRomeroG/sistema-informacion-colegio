@extends('layouts.home_plantilla')

@section('title', 'Cursos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Cursos de la gestion {{ $gestion }}</h2>
                </div>
                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)

                    <div class="col d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-success" href="{{ route('curso.create') }}"> Registrar nuevo</a>
                    </div>

                @endif
            </div>
            <div class="card-body table-responsive">
                <table class="table table-round-blue table-striped">
                    <thead class="table-head">
                        <tr>
                            <th>Curso</th>
                            @if ($gestion === Date('Y'))
                                <th> Cupo maximo </th>
                            @endif
                            <th>Cantidad de alumnos</th>
                            <th width="120px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                            <tr>
                                <td class="text-center">{{ $curso->nivel }}</td>
                                @if ($gestion === Date('Y'))
                                    <td class="text-center"> {{ $curso->cupo_max }} </td>
                                @endif
                                <td class="text-center">{{ $curso->cant_alumnos }}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary" href="{{ route('curso.show', $curso->id) }}">Ver</a>
                                    @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                                        @if ($gestion === Date('Y'))
                                            <a class="btn btn-sm btn-secondary"
                                                href="{{ route('curso.edit', $curso->id) }}">Editar</a>
                                        @endif
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
            responsive: true,
            autoWidth: false
        });
    });
</script>
@endsection