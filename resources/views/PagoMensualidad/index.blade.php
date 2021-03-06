@extends('layouts.home_plantilla')

@section('title', 'Pago Mensualidad')

@section('css')
    <style>
        @media (max-width: 768px) {
            .col-9.mt-1.card{
                width: 92%;
            }
            .card-header > div.d-flex{
                align-items: stretch !important;
            }
            .card-header >div.d-flex a{
                display: flex;
                align-items: center;
            }
        }

        
    </style>
@endsection
@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Lista de Pagos</h2>
                </div>
                <div class="col d-flex justify-content-end align-items-center text-end">
                    <a class="btn btn-sm btn-dark" style="margin-right: 0.5rem" href="{{ route('mensualidad.PDFList') }}">PDF</a>
                    <a class="btn btn-sm btn-success" href="{{ route('mensualidad.create') }}">Nuevo pago</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-round-blue">
                    <thead class="table-head">
                        <tr>
                            <th>Nro</th>
                            <th>Nombre completo</th>
                            <th>Nro. Cuota</th>
                            <th>Monto</th>
                            <th width="120px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $persona->nombre.' '.$persona->apellido_pat.' '.$persona->apellido_mat }}</td>
                                <td class="text-center">{{ $persona->nro_cuota }}</td>
                                <td>{{ $persona->monto }} Bs.</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary" href="{{route('mensualidad.show', $persona->idPago)}}">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
