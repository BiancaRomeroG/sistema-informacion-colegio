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
<form action="{{$actionform}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Modificacion de notas</h2>
                </div>
            </div> 
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h3 class="">Notas del {{$trimestres[1]->nro_trim}}° trimestre</h3>
                </div>
            </div> 
            @if (count($trimestres) <= 0)
                <div class="alert alert-info">
                    <p>No hay notas ingresadas del primer trimestre</p>
                </div>
            @else

                <!--Tabla del 1er trimestre-->
                <table class="table table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th>Asignatura</th>
                            <th>Ser</th>
                            <th>Saber</th>
                            <th>Hacer</th>
                            <th>Decidir</th>
                        </tr>
                    </thead>
                    <input type="hidden" name="id_curso" value="{{$trimestres[0]->idCurso}}">
                    <tbody>
                        @foreach ($trimestres as $trimestre)
                            <tr >
                                <td hidden>{{ ++$i }}</td>
                                <td>{{ $trimestre->nombre.' '.$trimestre->apellido_pat.' '.$trimestre->apellido_mat }}</td>
                                <td style="width: 100px; height: 5px;" ><input class="text-center" style="width: 100px; height: 5;" name="ser{{$i}}" value="{{$trimestre->ser}}"></td>
                                <td style="width: 100px; height: 5px;" ><input class="text-center" style="width: 100px; height: 5;" name="saber{{$i}}" value="{{$trimestre->saber}}"></td>
                                <td style="width: 100px; height: 5px;" ><input class="text-center" style="width: 100px; height: 5;" name="hacer{{$i}}" value="{{$trimestre->hacer}}"></td>
                                <td style="width: 100px; height: 5px;" ><input class="text-center" style="width: 100px; height: 5;" name="decidir{{$i}}" value="{{$trimestre->decidir}}"></td>
                                <input type="hidden" name="idNota{{$i}}" value="{{$trimestre->idNota}}">   
                            </tr>
                            <input type="hidden" name="count" value="{{$i}}"> 
                        @endforeach
                    </tbody>
                </table>
                <div class="row-2 text-end">
                    <a href="{{route('notas.index')}}" class="btn btn-danger">Cancelar</a>
                    <button class="btn btn-primary" type="submit">Guardar Notas</button>   
                </div>
               
            @endif
        </div>
    </div>  
  
</form>
@endsection