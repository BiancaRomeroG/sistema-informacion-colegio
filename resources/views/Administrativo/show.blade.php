@extends('layouts.showDatos')

@section('title', 'Datos personales del Administrativo')

@section('adicional-information')


<div class="row mb-4">
        <strong>
            Profesion:
        </strong>
        <label>
            {{ $administrativo->profesion }}
        </label>
    </div>

<div class="row justify-content-around">
        <div class="col text-center">
            <form action="{{ route('administrativo.destroy', $persona->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

 @endsection