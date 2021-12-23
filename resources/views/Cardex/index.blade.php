@extends('layouts.home_plantilla')

@section('title', 'Cardex')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Búsqueda de cardex por alumno</h5>
            </div>
            <div class="card-body p-4">
                <div class="row mb-3 justify-content-around">
                    <div class="col m-2">
                        <form method="GET" action="{{route('cardex.index')}}">
                            @csrf
                            <div class="input-group">
                                <input type="search" class="form-control" id="nombreInput" name="nombre" placeholder="Buscar Alumnos" value="{{$texto}}">
                                <button class="btn btn-outline-primary" type="submit" id="buscar">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <form method="POST" action="{{route('cardex.store')}}">
                    @csrf
                    @if (count($personas) <= 0)
                        <div class = "text-center alert alert-danger">
                            <p>No hay resultados</p>
                        </div>      
                    @else
                    <div class="table-responsive container row mb-3">
                        <table class="table table-striped">
                            <tr>
                                <th>&nbsp</th>
                                <th>Nombre Completo</th>
                                <th>C.I.</th>
                                <th>Sexo</th>
                                <th>Curso</th>
                                <th>Cod. RUDE</th>
                            </tr>
                                @foreach ($personas as $persona)
                                    <tr>
                                        <td><input name="idCardex" type="radio" value="{{$persona->idCardex}}"></td>
                                        <td>
                                            {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}
                                        </td>
                                        <td>{{$persona->ci}}</td>
                                        <td>{{$persona->sexo}}</td>
                                        <td>{{$persona->id_curso}}° Secundaria</td>
                                        <td>{{$persona->cod_rude}}</td>
                                    </tr>
                                @endforeach
                        </table>
                        {!! $personas->links() !!}
                    </div>
                    @endif   
                    <div class="mt-3 text-end me-5 mb-5">
                        <button type="submit" class="btn btn-primary">
                            Mostrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection