@extends('layouts.home_plantilla')

@section('title', 'Test')

@section('navigation')
<ul>
    @foreach ($personas as $persona)
        <li>
            <a href="{{route('alumno.show', $persona)}}">{{$persona->nombre}}</a>
        </li>
    @endforeach
</ul>
@endsection