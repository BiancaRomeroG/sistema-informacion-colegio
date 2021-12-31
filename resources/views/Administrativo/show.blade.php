@extends('layouts.showDatos')
@section('title', 'Informacion del Apoderado')

@section('info-adicional-col1')

<p class="mb-1"><b class="fw-bold text-secondary">Profesion:
</b> {{$persona->profesion}}</p>
@endsection

@section('info-adicional-col2')

@endsection

@section('botones')
<div class="row justify-content-around mt-3">
    @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
    <div class="col text-center">
        <a class="btn btn-secondary" href="{{ route('administrativo.edit', $persona->idAdministrativo) }}">Editar</a>
    </div>
    <div class="col text-center">
        <form action="{{ route('administrativo.destroy', $persona->idAdministrativo) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
    @endif
</div>
@endsection
