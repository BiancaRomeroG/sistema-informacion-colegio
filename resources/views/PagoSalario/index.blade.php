@extends('layouts.home_plantilla')

@section('title', 'Profesor')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de Pagos</h2>
                </div>
               
                <div class="col text-end">
                    <a class="btn btn-sm btn-dark" href="{{ route('salario.PDFList') }}">PDF</a>
                    <a class="btn btn-sm btn-success" href="{{ route('salario.create') }}">Nuevo pago</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nro</th>
                        <th>Nombre completo</th>
                        <th>Nro. Pago</th>
                        <th>Monto</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $persona->nombre.' '.$persona->apellido_pat.' '.$persona->apellido_mat }}</td>
                            <td>{{ $persona->nro_pago }}</td>
                            <td>{{ $persona->monto }} Bs.</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{route('salario.show', $persona->idPago)}}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $personas->links() !!}
            </div>
        </div>
    </div>
@endsection
