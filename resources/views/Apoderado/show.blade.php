@extends('layouts.showDatos')
@section('title', 'Informacion del Alumno')

@section('adicional-information')

    <div class="row mb-4">
        <strong>
            Parentesco:
        </strong>
        <label>
            {{ $tutor->parentesco }}
        </label>
    </div>

    <div class="row justify-content-around">
        @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
        <div class="col text-center">
            <a class="btn btn-secondary" href="{{ route('apoderado.edit', $tutor->id) }}">Editar</a>
        </div>
        <div class="col text-center">
            <form action="{{ route('apoderado.destroy', $tutor->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        @endif
    </div>

@endsection
