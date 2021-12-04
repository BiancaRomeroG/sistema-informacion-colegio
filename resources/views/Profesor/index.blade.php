@extends('layouts.home_plantilla')

@section('title', 'Profesor-Index')

@section('navigation')
<ul>
    @foreach ($personas as $persona)
        <li>
            <a href="{{route('profesor.show', $persona)}}">
                {{$persona->nombre}}
                {{$persona->apellido_pat}}
                {{$persona->apellido_mat}}
            </a>
        </li>
    @endforeach
</ul>
@endsection