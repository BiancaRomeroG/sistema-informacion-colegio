@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2>Lista de Alumnos del curso {{$curso->nivel}} de secundaria</h2>
            </div>
        </div>
        <table class="table table-bordered">
            <thead class="table-secondary">
                <tr ALIGN=center>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="6" >Boletin</th>
                </tr>
                <tr>
                    <th scope="col">Nro</th>
                    <th >Nombre</th>
                    <th >Apellidos</th>
                    <th >1er Trimestre</th>
                    <th >2do Trimestre</th>
                    <th >3er Trimestre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                ?>
                @foreach ($personas as $persona)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-primary" href="{{ route('boletin.trim1', $persona->id) }}">Ver</a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-primary" href="{{ route('boletin.trim2', $persona->id) }}">Ver</a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-primary" href="{{ route('boletin.trim3', $persona->id) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection