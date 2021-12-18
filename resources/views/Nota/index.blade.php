@extends('layouts.home_plantilla')

@section('title', 'Notas')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Cursos</h5>
            </div>
            <form action="{{route('notas.create')}}">
                @csrf
                <div class="card-body p-4">
                    <table class="table table-bordered">
                        <tr>
                            <th>Curso</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            <td>1° de Secundaria</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('notas.show', 1)}}">Ver</a>
                                <a class="btn btn-danger" href="{{route('notas.edit', 1)}}">Editar</a>
                                <button class="btn btn-success" type="submit" name="id_curso" value="1">Registrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2° de Secundaria</td>
                            <td>
                                <a class="btn btn-primary mt-3" href="{{route('notas.show', 2)}}">Ver</a>
                                <a class="btn btn-danger mt-3" href="{{route('notas.edit', 2)}}">Editar</a>
                                <button class="btn btn-success mt-3" type="submit" name="id_curso" value="2">Registrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3° de Secundaria</td>
                            <td>
                                <a class="btn btn-primary mt-3" href="{{route('notas.show', 3)}}">Ver</a>
                                <a class="btn btn-danger mt-3" href="{{route('notas.edit', 3)}}">Editar</a>
                                <button class="btn btn-success mt-3" type="submit" name="id_curso" value="3">Registrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4° de Secundaria</td>
                            <td>
                                <a class="btn btn-primary mt-3" href="{{route('notas.show', 4)}}">Ver</a>
                                <a class="btn btn-danger mt-3" href="{{route('notas.edit', 4)}}">Editar</a>
                                <button class="btn btn-success mt-3" type="submit" name="id_curso" value="4">Registrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5° de Secundaria</td>
                            <td>
                                <a class="btn btn-primary mt-3" href="{{route('notas.show', 5)}}">Ver</a>
                                <a class="btn btn-danger mt-3" href="{{route('notas.edit', 5)}}">Editar</a>
                                <button class="btn btn-success mt-3" type="submit" name="id_curso" value="5">Registrar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6° de Secundaria</td>
                            <td>
                                <a class="btn btn-primary mt-3" href="{{route('notas.show', 6)}}">Ver</a>
                                <a class="btn btn-danger mt-3" href="{{route('notas.edit', 6)}}">Editar</a>
                                <button class="btn btn-success mt-3" type="submit" name="id_curso" value="6">Registrar</button>
                            </td>
                        </tr>
                    </table>     
                </div>
            </form>
        </div>
    </div>
</section>
@endsection