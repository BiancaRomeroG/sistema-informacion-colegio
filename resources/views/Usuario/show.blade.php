@extends('layouts.showDatos')

@section('title', 'Datos personales del Profesor')

@section('adicional-information')


<div class="row mb-4">
        <strong>
            Nombre de usuario:
        </strong>
        <label>
            {{ $persona->nombre_usuario }}
        </label>
    </div>

<div class="row justify-content-around">
        <div class="col text-center">
            <form action="{{ route('usuario.update', $persona->idUsuario) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-warning">Restablecer contraseña</button>
            </form>
        </div>
    </div>

 @endsection