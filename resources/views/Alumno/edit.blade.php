@extends('layouts.home_plantilla')

@section('title', 'Editar Alumno')
 @section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />


 <style>
     span.select2.select2-container{
         width: 100% !important;
     }
     @media(max-width: 850px){
         section div.col-9{
             width: 100%;
         }
     }

     @media(max-width: 600px){
        .card.shadow.m-5{
            margin: 3rem 0 0 0 !important;
        }
     }

     @media(max-width: 768px){
         .card.shadow.m-5{
             margin:  1rem 0 0 0 !important;
         }
         .card-body .card-body > .row{
             display: flex;
             flex-direction: column;
         }
         .card-body .card-body > .row > .w-50{
             width: 100% !important;
         }
     }

 </style>
     
 @endsection
@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow ">
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
                            <input class="form-control" id="nombre" type="text" name="nombre" value="{{old('nombre' ,$persona->nombre)}}">
                            {!! $errors->first('nombre', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                        <div class="col m-2">
                            <label for="apellidoPat">
                                Apellido paterno<br>
                            </label>
                            <input class="form-control" id="apellidoPat" type="text" name="apellido_pat" value = "{{old('apellido_pat',$persona->apellido_pat)}}">
                            {!! $errors->first('apellido_pat', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="apellidoMat">
                                Apellido materno<br>
                            </label>
                            <input class="form-control" id="apellidoMat" type="text" name="apellido_mat" value="{{old('apellido_mat',$persona->apellido_mat)}}">
                            {!! $errors->first('apellido_mat', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="ci">
                                Cédula de identidad<br>
                            </label>
                            <input class="form-control" id="ci" type="number" name="ci" value="{{old('ci',$persona->ci)}}">
                            {!! $errors->first('ci', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                        <div class="col m-2">
                            <label for="email">
                                Email<br>
                            </label>
                            <input class="form-control" id="email" type="email" name="email" value= "{{old('email',$persona->email)}}">
                            {!! $errors->first('email', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="fechaNac">
                                Fecha de nacimiento<br>
                            </label>
                            <input class="form-control" id="fechaNac" type="date" name="fecha_nac" value= "{{old('fecha_nac',$persona->fecha_nac)}}">
                            {!! $errors->first('fecha_nac', '<span class="help-block text-danger">*:message</span>') !!}
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
                            {!! $errors->first('sexo', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label>
                                Dirección<br>
                            </label>
                            <input class="form-control" type="text" name="direccion" value="{{old('direccion',$persona->direccion)}}">
                            {!! $errors->first('direccion', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                        <div class="col m-2">
                            <label>
                                Telefono<br>
                            </label>
                            <input class="form-control" type="tel" name="telefono" value="{{old('telefono',$persona->telefono)}}">
                            {!! $errors->first('telefono', '<span class="help-block text-danger">*:message</span>') !!}
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
                                        <div class="col w-50">
                                            <label for="codigorude">
                                                Codigo Rude<br>
                                            </label>
                                            <input class="form-control" id="codrude" type="number" name="codrude" value="{{old('codrude',$alumno->cod_rude)}}" form="register_form">
                                            {!! $errors->first('codrude', '<span class="help-block text-danger">*:message</span>') !!}
                                        </div>
                                        <div class="col w-50">
                                            <label for="tutor">Apoderado</label>
                                    
                                            <select id="tutor_id" name = "tutor_id" class="form-select" aria-label="Default select example" form="register_form">
                                            <option selected>Seleccione un Apoderado</option>
                                                @foreach($tutores as $tutor)
                                                <option value="{{$tutor->id}}" 
                                                @if ($tutor->id === $tutorid)
                                                    selected
                                                @endif    
                                                > {{$tutor->nombre}} {{$tutor->apellido_pat}} {{$tutor->apellido_mat}} </option>
                                                @endforeach
                                            </select>
                                            {!! $errors->first('tutor_id', '<span class="help-block text-danger">*:message</span>') !!}
                                        </div>
                                    </div>
                                    </div>
                                </div>              
                            </div>
                            <div class="mt-3 me-2 text-end">
                                <a class="btn btn-danger" href="{{route('alumno.index')}}">Cancelar</a>
                                <button type="submit" class="btn btn-primary">
                                    Editar
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
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script>
    $("#tutor_id").select2({
   
        theme: "bootstrap-5",
       
    });
    
</script>
@endsection