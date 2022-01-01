@extends('layouts.home_plantilla')

@section('title', 'Bitacora')


@section('navigation')

    <div class="row justify-content-center ">
        <div class="col-11 custom-table card">
            <div class="row justify-content-between mb-2 card-header bg-gradient">
                <div class="col text-center">
                    <h2 style="font-weight: bold">BITACORA GENERAL</h2>
                </div>
            </div>
            <div class="card-body table-responsive ">
                <table class="table table-sm table-round-blue">
                    <thead class="table-head ">
                        <tr >
                            <th><span>NRO</span></th>
                            <th><span>USUARIO</span></th>
                            <th><span>TIPO DE USUARIO</span></th>
                            <th><span>APELLIDOS Y NOMBRES</span></th>
                            <th><span>FECHA</span></th>
                            <th><span>HORA</span></th>
                            <th ><span>DESCRIPCIÓN</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $key => $persona)
                            <tr >
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
             </div>
        </div>
    </div>
@endsection
