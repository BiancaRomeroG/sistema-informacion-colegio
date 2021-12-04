@extends('layouts.home_plantilla')

@section('title', 'Alumno-Index')

@section('navigation')
<ul>
    @foreach ($personas as $persona)
        <li>
            <a href="{{route('alumno.show', $persona)}}">
                {{$persona->nombre}}
                {{$persona->apellido_pat}}
                {{$persona->apellido_mat}}
            </a>
        </li>
    @endforeach
</ul>
@endsection