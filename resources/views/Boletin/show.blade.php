@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('css')
    <style>
        .table-round-blue tr:first-child th:nth-child(1),
        .table-round-blue tr:first-child th:nth-child(2),
        .table-round-blue tr:first-child th:nth-child(3){
            background-color: white;
        }
        .table-round-blue .table-head tr th{
            border-top: none;
        }
        .table-round-blue tr:first-child th:first-child{
            border: none;
        }
        .table-round-blue tr:nth-child(2) th:nth-child(1),
        .table-round-blue tr:nth-child(2) th:nth-child(2),
        .table-round-blue tr:nth-child(2) th:nth-child(3){
            border-top:  1px solid darkslategray;
        }

        .table-round-blue tr:nth-child(2) th:first-child{
            border-top-left-radius: 6px;
        }
        .table-round-blue tr:first-child th:nth-child(4){
            border-top-left-radius: 6px;
            border: 1px solid darkslategray;
        }

        @media(max-width: 768px){
            div > .col-9.card{
                width: 93% !important;
                padding: 0%;
            }
            .table-head > tr:first-child th{
                display: none;   
            }
        }
    </style>
@endsection
@section('navigation')

<div class="row justify-content-center">
    <div class="col-9 mt-1 card">
        <div class=" justify-content-between mb-2 card-header">
            <div class="col">
                <h2>Alumnos del curso {{$curso->nivel}}º de secundaria</h2>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-round-blue table-striped">
                <thead class="table-head">
                    <tr ALIGN=center>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan="3" >Boletin</th>
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
                        <td class="text-center">{{ ++$i }}</td>
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