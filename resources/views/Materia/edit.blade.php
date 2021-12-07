@extends('layouts.home_plantilla')

@section('title', 'Editar Materia')
    

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-12">
        <div class="card shadow m-5">
            <div class="card-header">
                <h5 class="m-2">Editar Materia</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" id='register_form' action="{{$actionform}}"> 
                    @csrf
                    @method('PUT')
                    <div class="row"> 
                        <div class="row justify-content-around">
                          <div class="col-4 ">
                            <div class="row">
                              Nombre: <br>
                              <input class="form-control" height="ml-5" type="text" name="nombre" value="{{$materia->nombre}}">
                            </div>
                            <div class="row">
                              Descripción: <br>
                              <textarea class="form-control" name="descripcion" cols="30" rows="5">{{$materia->descripcion}}</textarea>
                            </div>
                            <div class="row-5 mt-4">
                              <button class="btn btn-primary" type="submit">
                                Guardar
                              </button>
                            </div>
                        </div>
                        <div class="col-4 ">
                            <ul class="list-group">
                              <li class="list-group-item active">Profesores</li>
                              @foreach ($profesores as $profesor)
                                  <li class="list-group-item row-striped">
                                    <input id="radio" type="radio" class="form-check-input me-1" name="id_profesor" value="{{$profesor->id}}" <?php echo ($profesor->id == $materia->id_profesor ? "checked": "")?>>
                                    {{$profesor->nombre}}
                                    {{$profesor->apellido_pat}}
                                    {{$profesor->apellido_mat}}
                                  </li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
