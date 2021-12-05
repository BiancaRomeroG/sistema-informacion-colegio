@extends('layouts.home_plantilla')

@section('title', 'Test')

@section('navigation')

        <div class="card">
            <table class="table" >
                <caption>List of studets</caption>
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
                                <a href="{{route('alumno.show', $persona)}}">ver</a> 
                                <a href="{{route('alumno.edit', $persona->id)}}">editar</a> 
                                <a href="{{route('alumno.destroy', $persona->id)}}" method = 'DELETE'>borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$personas->links()}}

@endsection

