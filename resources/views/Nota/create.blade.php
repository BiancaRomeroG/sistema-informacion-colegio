@extends('layouts.home_plantilla')

@section('title', 'Registro de notas')

@section('navigation')
<form action="{{route('notas.store')}}" method="POST" id="form">
    @csrf 
    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Lista de alumnos de {{$personas[0]->id_curso}}° de secundaria</h2>
                </div>
            </div>
            <div class="row text-end">
                <div class="col-xl-4 mb-3">
                    <select class="form-control" id ='nro_trimestre' name="nro_trimestre" >
                        <option selected disabled>Seleccione un trimestre</option>
                        <option value="1"  {{ old('nro_trimestre') == "1" ? 'selected' : '' }}>Trimestre 1</option>
                        <option value="2"  {{ old('nro_trimestre') == "2" ? 'selected' : '' }}>Trimestre 2</option>
                        <option value="3"  {{ old('nro_trimestre') == "3" ? 'selected' : '' }}>Trimestre 3</option>
                    </select>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Nro</th>
                        <th>Nombre</th>
                        <th>Ser</th>
                        <th>Saber</th>
                        <th>Hacer</th>
                        <th>Decidir</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="id_materia" value="{{$materia->id}}">
                    <input type="hidden" name="id_curso" value="{{$personas[0]->id_curso}}">
                    @foreach ($personas as $persona)                 
                        <tr> 
                            <td>{{ ++$i }}</td>
                            <td>{{ $persona->nombre.' '.$persona->apellido_pat.' '.$persona->apellido_mat }}</td>
                            <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id = "ser{{$i}}"name="ser{{$i}}" value="{{old('ser'.$i)}}"></td>
                            <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id = "saber{{$i}}"name="saber{{$i}}" value="{{old('saber'.$i)}}"></td>
                            <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id = "hacer{{$i}}"name="hacer{{$i}}" value="{{old('hacer'.$i)}}"></td>
                            <td style="width: 100px; height: 5px;" ><input class="form-control text-center" style="width: 100px; height: 5;" id = "decidir{{$i}}"name="decidir{{$i}}" value="{{old('decidir'.$i)}}"></td>
                            <input type="hidden" name="id_boletin{{$i}}" value="{{$persona->idBoletin}}">                      
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
            <button class="btn btn-primary" type="submit" form="form" style ="margin-bottom: 1rem">Registrar</button>
        </div>
    </div>
</form> 
@endsection