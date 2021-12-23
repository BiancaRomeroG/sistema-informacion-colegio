@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Alumnos del curso {{$curso->nivel}} gestion {{$gestion}}</h2>
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
                    <?php
                        $i=0;
                     ?>
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
        </div>
    </div>
@endsection
