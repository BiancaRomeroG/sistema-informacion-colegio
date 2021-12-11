@extends('layouts.home_plantilla')

@section('title', 'Administrativo')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Bitacora de {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</h2>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nro</th>
                        <th>Fecha y hora</th>
                   
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acciones as $accion)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $accion->fecha }}</td>
                       
                            <td>{{ $accion->descripcion}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $acciones->links() !!}
            </div>
        </div>
    </div>
@endsection