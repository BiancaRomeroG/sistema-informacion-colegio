@extends('layouts.showDatos')
@section('title', 'Informacion del Apoderado')

@section('info-adicional-col1')

<p class="mb-1"><b class="fw-bold text-secondary">Parentesco:
</b> {{$persona->parentesco}}</p>
@endsection

@section('info-adicional-col2')
    @if (count($alumnos) > 0)
        @foreach ($alumnos as $alumno)
            <p class="mb-1"><b class="fw-bold text-secondary">En tutela de:
            </b> {{$alumno->nombre.' '.$alumno->apellido_pat.' '.$alumno->apellido_mat}}</p>
        @endforeach
    @endif
@endsection

@section('botones')
<div class="row justify-content-around mt-3">
    @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
    <div class="col text-center">
        <a class="btn btn-secondary" href="{{ route('apoderado.edit', $persona->idTutor) }}">Editar</a>
    </div>
    <div class="col text-center">
        <form action="{{ route('apoderado.destroy', $persona->idTutor) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
    @endif
</div>
@endsection
