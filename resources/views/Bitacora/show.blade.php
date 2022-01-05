@extends('layouts.home_plantilla')

@section('css')
    <style>
        @media(max-width: 768px){
            div div.col-10{
                width: 93%;
            }
        }
    </style>
@endsection
@section('title', 'Administrativo')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-10 table-responsive mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Bitacora de </h2>
                    <h2>{{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</h2>
                </div>
                <div class="col d-flex justify-content-end align-items-center ">
                    <a class="btn btn-sm btn-success" href="{{ route('bitacora.pdf', $persona->idUsuario) }}">Descargar PDF</a>
                </div>
            </div>
           <div class="card-body table-responsive">
            <table class="table table-round-blue table-striped">
                <thead class="table-head ">
                    <tr>
                        <th width = "5%">Nro</th>
                        <th>Fecha</th>
                        <th width = "20%">Hora</th>
                        <th width = "50%">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acciones as $accion)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td class="text-center">{{ Carbon\Carbon::parse($accion->fecha)->format('d-m-Y')}}</td>
                            <td class="text-center">{{ Carbon\Carbon::parse($accion->fecha)->format('H:i:s')}}</td>
                            <td>{{ $accion->descripcion}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
        
        </div>
    </div>
@endsection