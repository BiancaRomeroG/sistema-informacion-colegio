@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-10 table-responsive ">
            <div class="row justify-content-between mb-2">
                <div class="col text-center">
                    <h2 style="font-weight: bold">BITACORA GENERAL</h2>
                </div>
            </div>
            <table class="table table-bordered ">
                <thead class="table-light text-center">
                    <tr>
                        <th>NRO</th>
                        <th>USUARIO</th>
                        <th>TIPO DE USUARIO</th>
                        <th>APELLIDOS Y NOMBRES</th>
                        <th>FECHA</th>
                        <th>HORA</th>
                        <th>DESCRIPCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $key => $persona)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $persona->nombre_usuario}}</td>
                            <td>{{$persona->id_rol == 1 ? 'Administrador' : ($persona->id_rol == 2 ? 'Administrativo' : 'Profesor')}}</td>
                            <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }} {{$persona->nombre}}</td>
                            <td>{{ Carbon\Carbon::parse($acciones[$key]->fecha)->format('d-m-Y')}}</td>
                            <td>{{ Carbon\Carbon::parse($acciones[$key]->fecha)->format('H:i:s')}}</td>
                            <td>{{ $acciones[$key]->descripcion}}</td>
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
