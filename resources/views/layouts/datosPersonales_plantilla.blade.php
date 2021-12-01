@extends('layouts.home_plantilla')

@section('title', 'Registro')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">

        <div class="card shadow m-5">
            <div class="card-header">
                <h5 class="m-2">Datos Personales</h5>
            </div>
            <div class="card-body p-4">
                <form method="GET" id='register_form' action=@yield('form-action')>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="nombre">
                                Nombre<br>
                            </label>
                            <input class="form-control" id="nombre" type="text" name="nombre" value="{{old('nombre')}}">
                        </div>
                        <div class="col m-2">
                            <label for="apellidoPat">
                                Apellido paterno<br>
                            </label>
                            <input class="form-control" id="apellidoPat" type="text" name="apellido_pat" value="{{old('apellido_pat')}}">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="apellidoMat">
                                Apellido materno<br>
                            </label>
                            <input class="form-control" id="apellidoMat" type="text" name="apellido_mat" value="{{old('apellido_mat')}}">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="ci">
                                Cédula de identidad<br>
                            </label>
                            <input class="form-control" id="ci" type="number" name="ci" value="{{old('ci')}}">
                        </div>
                        <div class="col m-2">
                            <label for="email">
                                Email<br>
                            </label>
                            <input class="form-control" id="email" type="email" name="email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="fechaNac">
                                Fecha de nacimiento<br>
                            </label>
                            <input class="form-control" id="fechaNac" type="date" name="fecha_nac" value="{{old('fecha_nac')}}">
                        </div>
                        <div class="col m-2">
                            <p class="mb-1">
                                Género
                            </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="hombre" type="radio" name="sexo" value="1">
                                <label for="hombre">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="mujer" type="radio" name="sexo" value="2"> 
                                <label for="mujer">Mujer</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label>
                                Dirección<br>
                            </label>
                            <input class="form-control" type="text" name="direccion" value="{{old('direccion')}}">
                        </div>
                        <div class="col m-2">
                            <label>
                                Telefono<br>
                            </label>
                            <input class="form-control" type="tel" name="telefono" value="{{old('telefono')}}">
                        </div>

                    </div>
                    
                </form>
            </div>
        </div>
        
          <section class="row justify-content-center" id="main">
            <div class="col-12">
              <div class="card shadow m-5">
                <div class="card-header">
                    <h5 class="m-2">@yield('subtitle')</h5>
                </div>
                <div class="card-body p-4">
                  @section('adicional-information')
                  @show
                </div>
              </div>
            </div>
          </section>
        
    </div>
    <div class="mt-3 text-center me-2">
      <button type="submit" onclick="sendForm()" class="btn btn-primary">
          Registrar
      </button>
  </div>
</section>
</div>
<script>
    function sendForm(){
        document.all['register_form'].submit();
    }
</script>
@endsection