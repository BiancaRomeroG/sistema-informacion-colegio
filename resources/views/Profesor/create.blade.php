@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Profesor')
@section('css')
<style>
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

</style>
@endsection
@section('form-action', '')

@section('subtitle', 'Información Adicional')

@section('adicional-information')
        <div class="col m-2">
            <label for="profesion">
                Profesión<br>
            </label>
            <input form="register_form" class="form-control" 
            id="profesion" type="text" name="profesion" value="{{old('nombre')}}">
            {!! $errors->first('profesion', '<span class="help-block text-danger">*:message</span>') !!}
        </div>
@endsection
@section('btn')
    <a class="btn btn-danger" href="{{route('profesor.index')}}">Cancelar</a>
@endsection