@extends('layouts.home_plantilla')

@section('title', 'Usuarios')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Usuarios</h2>
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
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th width="140px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                            <td>{{ $persona->nombre_usuario}}</td>
                            <td> 
                                @if ($persona->id_rol === 1)
                                    Director
                                @elseif ($persona->id_rol === 2)
                                    Administrativo
                                @else
                                    Profesor
                                @endif
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-primary" href="{{ route('usuario.show', $persona->idUsuario) }}">Ver</a>
                               @if (Auth::user()->id_rol === 1)
                                    <a class="btn btn-sm btn-secondary" href="{{ route('bitacora.show', $persona->idUsuario) }}">Bitacora</a>    
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

