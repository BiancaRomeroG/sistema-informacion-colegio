@extends('layouts.home_plantilla')

@section('title', 'Listado')
    
@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow m-5">
            <div class="card-header">
                <h5 class="m-2">Informacion Academica</h5>
            </div>
            <div class="card-body p-4">
                <div class="row mb-4">
                    <strong>
                        Nombre:
                    </strong>
                    <label>
                       {{$materia->nombre}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Descripcion
                    </strong>
                    <label>
                        {{$materia->descripcion}}
                    </label>
                </div>
                <div class="row mb-4">
                    <strong>
                        Impartidor:
                    </strong>
                    <label>
                        {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}
                    </label>
                </div>
                <div class="row justify-content-around">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </div>
                    <div class="col text-center">
                        <form action="{{route('materia.destroy', $materia->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection