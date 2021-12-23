@extends('layouts.datosPersonales_plantilla')

@section('title', 'Registro de Alumnos')

@section('subtitle', 'Informacion Academica')

@section('adicional-information')
    <div class="row mb-3 justify-content-around">
        <div class="col m-2">
            <label for="codigorude">
                Codigo Rude<br>
            </label>
            <input class="form-control" id="codrude" type="number" name="codrude" value="{{ old('codrude') }}"
                form="register_form">
              {!! $errors->first('codrude', '<span class="text-danger">*:message</span>') !!}
        </div>
        <div class="col m-2">
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