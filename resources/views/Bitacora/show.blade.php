@extends('layouts.home_plantilla')

@section('title', 'Administrativo')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Bitacora de {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('bitacora.pdf', $persona->idUsuario) }}">Descargar PDF</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nro</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acciones as $accion)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ Carbon\Carbon::parse($accion->fecha)->format('d-m-Y')}}</td>
                            <td>{{ Carbon\Carbon::parse($accion->fecha)->format('H:i:s')}}</td>
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