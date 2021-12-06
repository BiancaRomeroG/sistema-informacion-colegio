@extends('layouts.showDatos')

@section('title', 'Datos personales del Profesor')

@section('adicional-information')


<div class="row mb-4">
        <strong>
            Profesion:
        </strong>
        <label>
            {{ $profesor->profesion }}
        </label>
    </div>

<div class="row justify-content-around">
        <div class="col text-center">
            <form action="{{ route('profesor.destroy', $persona->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

 @endsection