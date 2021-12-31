@extends('layouts.showDatos')
@section('title', 'Informacion del Alumno')

@section('info-adicional-col1')


<p class="mb-1"><b class="fw-bold text-secondary">Apoderado:
</b> {{ $personaTutor->nombre }} {{ $personaTutor->apellido_pat }} {{ $personaTutor->apellido_mat }} </p>
<p class="mb-1"><b class="fw-bold text-secondary">Parentesco:
</b> {{ $personaTutor->parentesco }} </p>
@endsection

@section('info-adicional-col2')
<p class="mb-1"><b class="fw-bold text-secondary">Código Rude:
</b> {{$persona->cod_rude}}</p>   
@endsection

@section('botones')
<div class="row justify-content-around mt-3">
    @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
    <div class="col text-center">
        <a class="btn btn-secondary" href="{{ route('alumno.edit', $persona->idAlumno) }}">Editar</a>
    </div>
    <div class="col text-center">
        <form action="{{ route('alumno.destroy', $persona->idAlumno) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
    @endif
</div>
@endsection
