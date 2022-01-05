@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Alumnos')
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
@section('subtitle', 'Informacion Academica')

@section('adicional-information')
    <div class="row mb-3 justify-content-around">
        <div class="col w-50">
            <label for="codigorude">
                Codigo Rude<br>
            </label>
            <input class="form-control" id="codrude" type="number" name="codrude" value="{{ old('codrude') }}"
                form="register_form">
              {!! $errors->first('codrude', '<span class="text-danger">*:message</span>') !!}
        </div>
        <div class="col 2-50">
            <label for="tutor">Apoderado</label>

            <select id="tutor_id" name="tutor_id"  class="form-select" style="heigth: 20px" aria-label="Default select example"
                form="register_form">
                <option selected disabled>Seleccione un Apoderado</option>
                @foreach ($tutores as $tutor)
                    <option value="{{$tutor->id}}" {{ old('tutor_id') == $tutor->id ? 'selected' : '' }}> {{ $tutor->nombre }} {{ $tutor->apellido_pat }}
                        {{ $tutor->apellido_mat }}</option>
                @endforeach
            </select>
            {!! $errors->first('tutor_id', '<span class="help-block text-danger">*:message</span>') !!}
        </div>
    </div>
@endsection
@section('btn')
    <a class="btn btn-danger" href="{{route('alumno.index')}}">Cancelar</a>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script>
    $("#tutor_id").select2({
        theme: "bootstrap-5",
    });
    
</script>
@endsection