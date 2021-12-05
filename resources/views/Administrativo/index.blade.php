@extends('layouts.home_plantilla')

@section('title', 'Test')

@section('navigation')

        <div class="card">
            <div class="col s4">
                <a href="{{ route('administrativo.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar nuevo</a>
            </div>
            <table class="table" >
                <caption>Lista de Administradores</caption>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>apellidos</th>
                    <th>Acciones</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                        <tr>
                            <td>{{$persona->id}}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat}}</td>
                            <td>
                                <a href="{{route('administrativo.show', $persona)}}">ver</a> 
                                <a href="{{route('administrativo.edit', $persona->id)}}">editar</a> 
                                <a href="{{route('administrativo.destroy', $persona->id)}}" method = 'DELETE'>borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$personas->links()}}

@endsection
