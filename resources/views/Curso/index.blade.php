@extends('layouts.home_plantilla')

@section('title', 'Alumnos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Cursos de la gestion {{$gestion}}</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-sm btn-success" href="{{ route('curso.create') }}"> Registrar nuevo</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Curso</th>
                        @if ($gestion === Date('Y'))
                            <th> Cupo maximo </th>
                        @endif
                        <th>Cantidad de alumnos</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            
                            <td>{{ $curso->nivel }}</td>
                            @if ($gestion === Date('Y'))
                            <td> {{$curso->cupo_max}} </td>
                             @endif
                            <td>{{ $curso->cant_alumnos}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('curso.show', ['id' =>$curso->id, 'gestion' => $gestion])}}">Ver</a>
                                @if ($gestion === Date('Y') )
                                <a class="btn btn-sm btn-secondary" href="{{ route('curso.edit', $curso->id) }}">Editar</a>   
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-4 "  >
                <form method='get' action="{{route('curso.index')}}">
                    <div class="row mb-3 ">
                        <div class="col m-2">
                            <label for="cupos_max">
                                Gestion:<br>
                            </label>
                            <input class="form-control" id="gestion" type="number" name="gestion" min="2010" max="3000" required> 
                        </div>
                    </div>
                   
                    <div class="mt-3  me-2">
                        <button type="submit"  class="btn btn-primary">
                            Buscar
                        </button>
                    </div>
                    
                </form>
    </div>
        </div>
        
    </div>
@endsection
