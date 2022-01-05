@extends('layouts.home_plantilla')


@section('title', 'Vista de Boletin')
@section('css')
    <style>
        @media(max-width: 768px){
            div > .col-9.card{
                width: 93% !important;
                padding: 0%;
            }
        }
    </style>
@endsection
@section('navigation')
<div class="row justify-content-center">
    <div class="col-9 mt-1 card" >
        <div class="row justify-content-between mb-2 card-header">
            <div class="col">
                <h2>Boletin del alumno</h2>
            </div>
        </div>
        <div class="row mb-3 justify-content-around">
            <div class="col m-2">
                <div class="card-body">
                    <div class="row justify-content-around">
                        <div class="col m-2">
                            <p class="mb-1 "><span class="fw-bold text-secondary">Alumno: </span> {{$persona->nombre}}
                                {{$persona->apellido_pat}} {{$persona->apellido_mat}}</p>
                            <p class="mb-1"><b class="fw-bold  text-secondary">CI: </b> {{$persona->ci}}</p>
                            <p class="mb-1"><b class="fw-bold  text-secondary">Apoderado: </b>
                                {{$personaTutor->nombre.' '.$personaTutor->apellido_pat.' '.$personaTutor->apellido_mat}}
                            </p>
                        </div>
                        <div class="col m-2">
                            <p class="mb-1"><b class="fw-bold text-secondary">Curso: </b> {{$cardex->id_curso}}°
                                Secundaria</p>
                            <p class="mb-1"><b class="fw-bold text-secondary">Código Rude: </b> {{$alumno->cod_rude}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-9 mt-2 card" >
        <div class="row justify-content-between mb-2 card-header">
            <div class="col">
                <h3 class="">Notas del primer trimestre</h3>
            </div>
        </div>
        @if (count($trimestre1) <= 0) <div class="alert alert-info">
            <p>No hay notas ingresadas del primer trimestre</p>
    </div>
    @else

    <!--Tabla del 1er trimestre-->
    <div class="card-body table-responsive">
    <table class="table table-round-blue ">
        <thead class="table-head">
            <tr>
                <th>Asignatura</th>
                <th>Ser</th>
                <th>Saber</th>
                <th>Hacer</th>
                <th>Decidir</th>
                <th>Nota Trimestral</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trimestre1 as $trimestre)
            <tr>
                <td class="text-start">{{ $trimestre->nombre }}</td>
                <td>{{ $trimestre->ser }}</td>
                <td>{{ $trimestre->saber }}</td>
                <td>{{ $trimestre->hacer }}</td>
                <td>{{ $trimestre->decidir }}</td>
                <td>{{ $trimestre->nota_trimestral }}</td>
            </tr>
            @endforeach
        </tbody>
     </table>
 
    @endif
    </div>
</div>
</div>
<div class="text-center mt-2" style="margin-bottom: 2rem">
    @if (count($trimestre1) > 0)
    <a href="{{ route('boletinTrim1', $cardex->id) }}" type="button" class="btn btn-success">Imprimir</a>
    @endif
</div>
@endsection

@section('js')
<script>
  
    $(document).ready(function() {
        $('.table-round-blue').DataTable({
            destroy: true,
            paging: false,
            searching: false,
            ordering: true,
            info: false,
            responsive: true,
            autoWidth: false,  
        });
    });
</script>
@endsection