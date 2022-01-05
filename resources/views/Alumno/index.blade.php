@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-11 card mt-1">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2 >Lista de alumnos</h2>
                </div>
                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                <div class="col d-flex justify-content-end align-items-center " >
                    <a class="btn btn-sm btn-success" href="{{ route('alumno.create') }}"> Registrar nuevo</a>
                </div>
                @endif
            </div>
           <div class="card-body table-responsive">
                <table class="table table-round-blue table-sm table-striped">
                    <thead class = "table-head">
                        <tr>
                            <th width = "5rem" >Nro</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Código Rude</th>
                            <th width="120px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                                <td>{{ $persona->cod_rude}}</td>
                                <td class="text-center">
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
           </div>
        </div>
    </div>
@endsection
