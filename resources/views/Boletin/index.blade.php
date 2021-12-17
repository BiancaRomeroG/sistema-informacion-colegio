@extends('layouts.home_plantilla')

@section('title', 'boletin')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Cursos</h2>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Curso</th>
                        <th> Cupo maximo </th>
                        <th>Cantidad de alumnos</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            
                            <td>{{ $curso->nivel }}</td>
                            <td> {{$curso->cupo_max}} </td>
                            <td>{{ $curso->cant_alumnos}}</td>
                            <td>
                                <!-- {{$curso->id}} -->
                                <a class="btn btn-sm btn-primary" href="{{ route('boletin.show', $curso->id) }}"> Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection
