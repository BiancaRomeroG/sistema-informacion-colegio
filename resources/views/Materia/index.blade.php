@extends('layouts.home_plantilla')

@section('title', 'Test')

@section('navigation')

        <div class="card">
            <a href="{{route('materia.create')}}">Crear nueva Materia</a>
            <table class="table" >
                <caption>Lista de Materias</caption>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Profesor</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                        <tr>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->descripcion}}</td>
                            <td>{{$materia->nombrePersona}} {{$materia->apellido_pat}} {{$materia->apellido_mat}}</td>
                            <td>
                                <a href="{{route('materia.show', $materia->idMateria)}}">Ver</a> 
                                <a href="{{route('materia.edit', $materia->idMateria)}}">Editar</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
@endsection