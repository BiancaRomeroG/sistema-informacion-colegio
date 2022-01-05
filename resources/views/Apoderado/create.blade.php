@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Apoderados/Tutores')
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
@section('subtitle', 'Informacion Adicional')

@section('adicional-information')
<div class="row mb-3 justify-content-around">
    <div class="col m-2">
        <label for="parentesco">
            Parentesco<br>
        </label>
        <input class="form-control" id="parentesco" type="text" name="parentesco" value="{{old('parentesco')}}" form="register_form">
        {!! $errors->first('parentesco', '<span class="help-block text-danger">*:message</span>') !!}
    </div>
</div>
@endsection
@section('btn')
    <a class="btn btn-danger" href="{{route('apoderado.index')}}">Cancelar</a>
@endsection