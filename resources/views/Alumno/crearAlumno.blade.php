@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Alumnos')

@section('form-action', '')

@section('subtitle', 'Informacion Academica')

@section('adicional-information')
<div class="row mb-3 justify-content-around">
    <div class="col m-2">
        <label for="codigorude">
            Codigo Rude<br>
        </label>
        <input class="form-control" id="codrude" type="number" name="codrude" value="{{old('codrude')}}">
    </div>
    <div class="col m-2">
        <label for="tutor" >Apoderado</label>
            <select id="tutor" class="form-select " aria-label="Default select example">
                <option selected>Seleccione un Apoderado</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
    </div>
</div>
</div>


@endsection