@extends('layouts.home_plantilla')

@section('title', 'Crear curso')

@section('navigation')
<section class="vh-100 row justify-content-center align-items-center" id="main">
    <div class="col-9 "  >

        <div class="card shadow m-4">
            <div class="card-header">
                <h5 class="m-2">Datos del curso
                </h5>
            </div>
            <div class="card-body p-4">
                <form method='POST' action="{{route('curso.update', $curso->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="nivel">
                                Nivel<br>
                            </label>
                            <input class="form-control" id="nivel" type="text" name="nivel" value = '{{$curso->nivel}}º' disabled> 
                        </div>
                        <div class="col m-2">
                            <label for="cupos_max">
                                Cantidad maxima de alumnos:<br>
                            </label>
                            <input class="form-control" id="cupos_max" type="number" name="cupos_max" min="10" max="100" value = {{$curso->cupo_max}} required> 
                        </div>
                    </div>
                   
                    <div class="mt-3 text-end me-2">

                        <a class="btn btn-danger" href="{{route('curso.index')}}">Cancelar</a>

                        <button type="submit"  class="btn btn-primary">
                            Editar
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</section>
</div>
@endsection