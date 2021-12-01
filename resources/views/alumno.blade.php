@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Alumnos')

@section('form-action', '')

@section('subtitle', 'Informacion Academica')

@section('adicional-information')
<select class="form-select" aria-label="Default select example">
    <option selected>Seleccione un Tutor</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
@endsection