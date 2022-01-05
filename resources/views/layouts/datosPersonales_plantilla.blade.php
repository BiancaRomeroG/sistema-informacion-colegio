@extends('layouts.home_plantilla')

@section('navigation')
    <section class="row justify-content-center" id="main">
        <div class="col-9">
            <div class="card shadow mt-1">
                <div class="card-header">
                    <h5 class="m-2">Datos Personales</h5>
                </div>
                <div class="card-body p-4">

                    <!--  FORMULARIO DE LOGIN  -->
                    <form method="POST" id='register_form' class ='needs-validation' action="{{ $actionform }}">
                        @csrf
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <label for="nombre" class="col-sm-2 col-form-label">
                                    Nombre<br>
                                </label>
                                <input class="form-control" id="nombre" type="text" name="nombre"
                                    value="{{ old('nombre') }}" >
                                    {!! $errors->first('nombre', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <label for="apellidoPat">
                                    Apellido paterno<br>
                                </label>
                                <input class="form-control" id="apellido_pat" type="text" name="apellido_pat"
                                    value="{{ old('apellido_pat') }}">
                                    {!! $errors->first('apellido_pat', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                            <div class="col m-2">
                                <label for="apellidoMat">
                                    Apellido materno<br>
                                </label>
                                <input class="form-control" id="apellido_mat" type="text" name="apellido_mat"
                                    value="{{ old('apellido_mat') }}">
                                    {!! $errors->first('apellido_mat', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <label for="ci">
                                    Cédula de identidad<br>
                                </label>
                                <input class="form-control" id="ci" type="number" name="ci" value="{{ old('ci') }}" >
                                {!! $errors->first('ci', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                            <div class="col m-2">
                                <label for="email">
                                    Email<br>
                                </label>
                                <input class="form-control" id="email" type="email" name="email"
                                    value="{{ old('email') }}"  oninvalid="setCustomValidity('Inserte un correo valido.')">
                                    {!! $errors->first('email', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <label for="fechaNac">
                                    Fecha de nacimiento<br>
                                </label>
                                <input class="form-control" id="fecha_nac" type="date" name="fecha_nac"
                                    value="{{ old('fecha_nac') }}">
                                    {!! $errors->first('fecha_nac', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                            <div class="col m-2">
                                <p class="mb-1">
                                    Género
                                </p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="hombre" type="radio" name="sexo" value="M">
                                    <label for="hombre">Hombre</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="mujer" type="radio" name="sexo" value="F">
                                    <label for="mujer">Mujer</label>
                                </div>
                                {!! $errors->first('sexo', '<br><span class="help-block text-danger">*:message</span>') !!}
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-around">
                            <div class="col m-2">
                                <label>
                                    Dirección<br>
                                </label>
                                <input class="form-control" id='direccion' type="text" name="direccion" value="{{ old('direccion') }}">
                                {!! $errors->first('direccion', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                            <div class="col m-2">
                                <label>
                                    Telefono<br>
                                </label>
                                <input class="form-control" id= 'telefono' type="tel" name="telefono" value="{{ old('telefono') }}">
                                {!! $errors->first('telefono', '<span class="help-block text-danger">*:message</span>') !!}
                            </div>
                        </div>
                        <div class="card shadow m-5">
                            <div class="card-header">
                                <h5 class="m-2">@yield('subtitle')</h5>
                            </div>
                            <div class="card-body p-4">
                            @section('adicional-information')
                            @show
                        </div>
                    </div>
                    <div class="mt-3 text-end">
                        @section('btn')
                        @show
                        <button type="submit" class="btn btn-primary">
                            Registrar
                        </button>       
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
</div>
@endsection


