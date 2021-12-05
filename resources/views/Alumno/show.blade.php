@extends('layouts.showDatos')
@section('title', 'Informacion del Alumno')

@section('adicional-information')

    <div class="row mb-4">
        <strong>
            Código Rude:
        </strong>
        <label>
            {{ $alumno->cod_rude }}
        </label>
    </div>

    <div class="row mb-4">
        <strong>
            Apoderado:  
        </strong>
        <label>
            {{ $personaTutor->nombre }} {{ $personaTutor->apellido_pat }} {{ $personaTutor->apellido_mat }}  
        </label>
    </div>

    <div class="row justify-content-around">
        <div class="col text-center">
            <a class="btn btn-secondary" href="{{ route('alumno.edit', $alumno->id) }}">Editar</a>
        </div>
        <div class="col text-center">
            <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

    

@endsection
