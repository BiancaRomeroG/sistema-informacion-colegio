@extends('layouts.home_plantilla')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow m-5">
            <div class="card-header">
                <h5 class="m-2">Datos Personales a editar</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" id='register_form' action="{{$actionform}}"> 
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 justify-content-around"> 
                        <div class="col m-2"> 
                            <label for="nombre">
                                Nombre<br>
                            </label>
                            <input class="form-control" id="nombre" type="text" name="nombre" value="{{$persona->nombre}}")>
                        </div>
                        <div class="col m-2">
                            <label for="apellidoPat">
                                Apellido paterno<br>
                            </label>
                            <input class="form-control" id="apellidoPat" type="text" name="apellido_pat" value = "{{$persona->apellido_pat}}">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="apellidoMat">
                                Apellido materno<br>
                            </label>
                            <input class="form-control" id="apellidoMat" type="text" name="apellido_mat" value="{{$persona->apellido_mat}}">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="ci">
                                Cédula de identidad<br>
                            </label>
                            <input class="form-control" id="ci" type="number" name="ci" value="{{$persona->ci}}">
                        </div>
                        <div class="col m-2">
                            <label for="email">
                                Email<br>
                            </label>
                            <input class="form-control" id="email" type="email" name="email" value= "{{$persona->email}}">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="fechaNac">
                                Fecha de nacimiento<br>
                            </label>
                            <input class="form-control" id="fechaNac" type="date" name="fecha_nac" value= "{{$persona->fecha_nac}}">
                        </div>
                        <div class="col m-2">
                            <p class="mb-1">
                                Género
                            </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="hombre" type="radio" name="sexo" value="M"
                                @if ($persona->sexo === 'M')
                                    checked
                                @endif
                                >
                                <label for="hombre">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="mujer" type="radio" name="sexo" value="F"
                                @if ($persona->sexo === 'F')
                                    checked
                                @endif
                                >
                                <label for="mujer">Mujer</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label>
                                Dirección<br>
                            </label>
                            <input class="form-control" type="text" name="direccion" value="{{$persona->direccion}}">
                        </div>
                        <div class="col m-2">
                            <label>
                                Telefono<br>
                            </label>
                            <input class="form-control" type="tel" name="telefono" value="{{$persona->telefono}}">
                        </div>
                    </div>
                    <section class="row justify-content-center" id="main">
                        <div class="col-12">
                            <div class="card shadow m-5">
                                <div class="card-header">
                                    <h5 class="m-2"> Información adicional</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="row mb-3 justify-content-around">
                                        <div class="col m-2">
                                            <label for="profesion">
                                                Profesión<br>
                                            </label>
                                            <input form="register_form" class="form-control" 
                                            id="profesion" type="text" name="profesion" value="{{$profesor->profesion}}">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="mt-3 text-center me-2">
                                <button type="submit" onclick="sendForm()" class="btn btn-primary">
                                    editar
                                </button>
                            </div>
                        </div>
                        
                    </section>
                    
                </form>
            </div>
        </div>
    </div>
    
    </section>
    </div>
    <script>
        function sendForm() {
            document.all['register_form'].submit();
        }
    </script>
@endsection