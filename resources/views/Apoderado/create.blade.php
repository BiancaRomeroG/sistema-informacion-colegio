@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Apoderados/Tutores')

@section('subtitle', 'Informacion Adicional')

@section('adicional-information')
<div class="row mb-3 justify-content-around">
    <div class="col m-2">
        <label for="parentesco">
            Parentesco<br>
        </label>
        <input class="form-control" id="parentesco" type="text" name="parentesco" value="{{old('parentesco')}}" form="register_form">
    </div>
</div>
</div>
@endsection