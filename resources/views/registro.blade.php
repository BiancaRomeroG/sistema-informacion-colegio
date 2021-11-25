@extends('layouts.home_plantilla')

@section('title', 'Registro')

@section('navigation')
      <div class="col-12" id="main">
        <!--Contenido-->
        <section class="">  
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center"> 
                        <div class="card shadow">
                            <div class="card-body p-5">
                                <form action="" method="GET">   <!-- Metodo POST para request del form -->
                                  <div class="mb-5 text-center">
                                    <h3>Registro de personas</h3>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        <label>
                                          Nombre:<br>
                                          <input class="form-control" height="ml-5" type="text" name="nombre" value="{{old('nombre')}}">
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label>
                                          Apellido paterno:<br>
                                          <input class="form-control" type="text" name="ap_pat" value="{{old('ap_pat')}}">
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label>
                                          Apellido materno:<br>
                                          <input class="form-control" type="text" name="ap_mat" value="{{old('ap_mat')}}">
                                        </label>
                                      </div>
                                    </div>

                                    <div class="row mt-4">
                                      <div class="col">
                                        <label>
                                          Cedula de identidad:<br>
                                          <input class="form-control" type="number" name="ci" value="{{old('ci')}}">
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label>
                                          Fecha de nacimiento:<br>
                                          <input class="form-control" type="date" name="fecha_nac" value="{{old('fecha_nac')}}">
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label>
                                          Género:<br>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo_h"> Hombre
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo_h"> Mujer
                                          </div>       
                                        </label>
                                      </div>                                          
                                    </div>

                                    <div class="row mt-4">
                                      <div class="col">
                                        <label>
                                          Email:<br>
                                          <input class="form-control" type="email" name="email" value="{{old('email')}}">
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label>
                                          Dirección:<br>
                                          <input class="form-control" type="text" name="direccion" value="{{old('direccion')}}">
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label>
                                          Telefono:<br>
                                          <input class="form-control" type="tel" name="telefono" value="{{old('telefono')}}">
                                        </label>
                                      </div>
                                    </div>

                                    <div class="mt-5">
                                      <button type="submit" class="btn btn-primary">
                                        Registrar
                                      </button>
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