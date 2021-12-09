@extends('layouts.home_plantilla')

@section('title', 'Inscripción')

@section('navigation')

<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Inscripción alumno</h5>
            </div>
            <div class="card-body p-4">
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <p class="mb-1">Código del alumno</p>
                            <form method="GET" action="{{route('inscripcion.create')}}">
                                @csrf
                                <div class="input-group">
                                    <input type="search" class="form-control" id="nombreInput" name="nombre" placeholder="Buscar Alumnos" value="{{$texto}}">
                                    <button class="btn btn-outline-primary" type="submit" id="buscar">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <form method="POST" action="{{route('inscripcion.store')}}">
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
                                <th>Fecha nac.</th>
                                <th>Email</th>
                            </tr>
                                @foreach ($personas as $persona)
                                    <tr>
                                        <td><input name="id_alumno" type="radio" value="{{$persona->idAlumno}}"></td>
                                        <td>
                                            {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}
                                        </td>
                                        <td>{{$persona->ci}}</td>
                                        <td>{{$persona->sexo}}</td>
                                        <td>{{$persona->fecha_nac}}</td>
                                        <td>{{$persona->email}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="curso" class="mb-2">
                                Curso a inscribir
                            </label>
                            <select name="curso" id="curso" class="form-select" aria-label="Default select example">
                                <option selected>Seleccione el curso</option>
                                <option value="1">1° Secundaria</option>
                                <option value="2">2° Secundaria</option>
                                <option value="3">3° Secundaria</option>
                                <option value="4">4° Secundaria</option>
                                <option value="5">5° Secundaria</option>
                                <option value="6">6° Secundaria</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 text-end me-5 mb-5">
                        <a class="btn btn-danger" href="{{route('inscripcion.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-primary">
                            Inscribir
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection