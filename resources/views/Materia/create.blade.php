@extends('layouts.home_plantilla')

@section('title', 'Registro')

@section('navigation')
        <!--Contenido-->
        <section class="">  
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center"> 
                        <div class="card shadow">
                            <div class="card-body p-5">
                                <form action="{{route('materia.store')}}" method="POST" id ="form-registro-materia">   <!-- Metodo POST para request del form -->
                                  @csrf
                                  <div class="mb-5 text-center">
                                    <h1 class="font-italic">Registrar materia</h1>
                                  </div>
                                  <div class="row"> 
                                    <div class="row justify-content-around">
                                      <div class="col-4 ">
                                        <div class="row">
                                          Nombre: <br>
                                          <input class="form-control" height="ml-5" type="text" name="nombre" value="{{old('nombre')}}">
                                        </div>
                                        <div class="row">
                                          Descripción: <br>
                                          <textarea class="form-control" name="descripcion" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="row-5 mt-4">
                                          <button class="btn btn-primary" type="submit">
                                            Registrar
                                          </button>
                                        </div>
                                      </div>
                                      <div class="col-4 ">
                                        <ul class="list-group">
                                          <li class="list-group-item active">Profesores</li>
                                          @foreach ($profesores as $profesor)
                                              <li class="list-group-item row-striped">
                                                <input type="radio" class="form-check-input me-1" name="id_profesor" value="{{$profesor->id}}">
                                                {{$profesor->nombre}}
                                                {{$profesor->apellido_pat}}
                                                {{$profesor->apellido_mat}}
                                              </li>
                                          @endforeach
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>

                </div>
            </div>
        </section>
      </div>
    </div>
@endsection 