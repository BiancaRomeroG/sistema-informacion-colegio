@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Profesor')

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