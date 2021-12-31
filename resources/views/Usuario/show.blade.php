@extends('layouts.showDatos')
@section('title', 'Informacion del Alumno')

@section('info-adicional-col1')
    <p class="mb-1 "><span class="fw-bold text-secondary">Nombre Usuario: </span> 
        {{$persona->nombre_usuario}}  
    </p>
@endsection

@section('info-adicional-col2')
    <p class="mb-1 "><span class="fw-bold text-secondary">Estado: </span> 
        @if ($persona->estado == 1)
            <button type="button" class="btn btn-success px-3">Activo</button>  
        @else
            <button type="button" class="btn btn-danger px-3">Desactivo</button>  
        @endif
    </p>
@endsection

@section('botones')
<div class="row justify-content-around mt-3">
    @if (Auth::user()->id_rol == 1)
        <div class="row justify-content-around">
            <div class="col text-center">
                <form action="{{ route('usuario.update', $persona->idUsuario) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning">Restablecer contraseña</button>
                </form>
            </div>
        </div>
    @endif
</div>
@endsection

