@extends('layouts.home_plantilla')

@section('title', 'Vista de cardex')

@section('navigation')
<style>
    td {
        text-align: center
    }
    th {
        text-align: center
    }
</style>
<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2>Vista de notas de {{$id_curso}}° de secundaria</h2>
            </div>
        </div> 
        <div class="row m-2 card">
            <div class="col m-2">
                <p class="mb-1 "><span class="fw-bold text-secondary">Profesor: </span> {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</p>
                <p class="mb-1"><b class="fw-bold  text-secondary">Materia: </b> {{$materia->nombre}}</p>
            </div>
        </div>
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2 class="m-2">Notas del primer trimestre</h2>
            </div>
        </div> 
        @if (count($trimestre1) <= 0)
            <div class="alert alert-info">
                <p>No hay notas ingresadas del primer trimestre</p>
            </div>
        @else

            <!--Tabla del 1er trimestre-->
            <table class="table table-bordered ">
                <thead class="table-secondary">
                    <tr>
                        <th>Alumno</th>
                        <th>Ser</th>
                        <th>Saber</th>
                        <th>Hacer</th>
                        <th>Decidir</th>
                        <th>Nota Trimestral</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trimestre1 as $trimestre)
                        <tr >
                            <td class="text-start">{{ $trimestre->nombre.' '.$trimestre->apellido_pat.' '.$trimestre->apellido_mat }}</td>
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
<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2>Notas del segundo trimestre</h2>
            </div>
        </div>
        @if (count($trimestre2) <= 0)
            <div class="alert alert-info">
                <p>No hay notas ingresadas del segundo trimestre</p>
            </div>
        @else

            <!--Tabla del 1er trimestre-->
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Alumno</th>
                        <th>Ser</th>
                        <th>Saber</th>
                        <th>Hacer</th>
                        <th>Decidir</th>
                        <th>Nota Trimestral</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trimestre2 as $trimestre)
                        <tr>
                            <td class = "text-start">{{ $trimestre->nombre.' '.$trimestre->apellido_pat.' '.$trimestre->apellido_mat }}</td>
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
<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2>Notas del tercer trimestre</h2>
            </div>
        </div>
        @if (count($trimestre3) <= 0)
            <div class="alert alert-info">
                <p>No hay notas ingresadas del tercer trimestre</p>
            </div>
        @else

            <!--Tabla del 1er trimestre-->
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Alumno</th>
                        <th>Ser</th>
                        <th>Saber</th>
                        <th>Hacer</th>
                        <th>Decidir</th>
                        <th>Nota Trimestral</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trimestre3 as $trimestre)
                        <tr>
                            <td class = "text-start">{{ $trimestre->nombre.' '.$trimestre->apellido_pat.' '.$trimestre->apellido_mat }}</td>
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

@endsection