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
                    <input type="hidden" name="nro_trim" value="{{$trimestres[0]->nro_trim}}">
                    <input type="hidden" name="materia" value="{{$materia->id}}">
                    <tbody>
                        @foreach ($trimestres as $trimestre)
                            <tr >
                                <td hidden>{{ ++$i }}</td>
                                <td>{{ $trimestre->nombre.' '.$trimestre->apellido_pat.' '.$trimestre->apellido_mat }}</td>
                                <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id ="ser{{$i}}"     name="ser{{$i}}"       value="{{old('ser'.$i, $trimestre->ser)}}"></td>
                                <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id ="saber{{$i}}"   name="saber{{$i}}"     value="{{old('saber'.$i, $trimestre->saber)}}"></td>
                                <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id ="hacer{{$i}}"   name="hacer{{$i}}"     value="{{old('hacer'.$i,  $trimestre->hacer)}}"></td>
                                <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id ="decidir{{$i}}" name="decidir{{$i}}"   value="{{old('decidir'.$i, $trimestre->decidir)}}"></td>
                                <input type="hidden" name="idNota{{$i}}" value="{{$trimestre->idNota}}">   
                                <input type="hidden" name="idBoletin{{$i}}" value="{{$trimestre->idBoletin}}">
                            </tr>
                            <input type="hidden" name="count" value="{{$i}}"> 
                            
                        @endforeach
                    </tbody>
                </table>
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <?php 
                    $message1 = 'El campo es obligatorio.';
                    $message2 = 'El campo debe ser un valor entre 0 y 100.';
                    $message3 = 'El campo debe ser un número.';
                    $message4 = 'Debe seleccionar un trimestre.';
                    if(in_array($message1,$errors->all(),false))
                        echo '<li>'.$message1.'</li>';
                    
                    if(in_array($message2,$errors->all(),false))
                        echo '<li>'.$message2.'</li>';
                        
                    if(in_array($message3,$errors->all(),false))
                        echo '<li>'.$message3.'</li>';

                    if(in_array($message4,$errors->all(),false))
                        echo '<li>'.$message4.'</li>';
                    ?>
                </ul>
            </div>
             @endif
                <div class="row-2 text-end" style ="margin-bottom: 1rem">
                    <a href="{{route('notas.index')}}" class="btn btn-danger" >Cancelar</a>
                    <button class="btn btn-primary" type="submit">Guardar Notas</button>   
                </div>
               
            @endif
        </div>
    </div>  
  
</form>
@endsection