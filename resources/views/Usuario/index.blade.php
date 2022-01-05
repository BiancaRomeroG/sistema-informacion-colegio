@extends('layouts.home_plantilla')

@section('css')
    <style>
        @media(max-width: 768px){
            div div.col-10{
                width: 92% !important;
            }
        }
    </style>
@endsection
@section('title', 'Usuarios')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-10 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Lista de Usuarios</h2>
                </div>
            </div>
          <div class="card-body table-responsive">  
            <table class="table table-round-blue">
                <thead class="table-head">
                    <tr>
                        <th width = "5rem">Nro</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th width="140px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
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
                            @if ($persona->estado == true)
                                <td class="bg-success text-white">
                                    Activo
                                </td>  
                                @else
                                <td class="bg-danger text-white">
                                    Desactivo
                                </td>
                                
                                @endif
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
          </div>
         
        </div>
    </div>
@endsection

