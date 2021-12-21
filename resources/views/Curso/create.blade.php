@extends('layouts.home_plantilla')

@section('title', 'Crear curso')

@section('navigation')
<section class="vh-100 row justify-content-center align-items-center" id="main">
    <div class="col-9 "  >

        <div class="card shadow m-4">
            <div class="card-header">
                <h5 class="m-2">Datos del curso
                </h5>
            </div>
            <div class="card-body p-4">
                <form method='POST' action='{{route('curso.store')}}'>
                    @csrf
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="nivel">
                                Nivel<br>
                            </label>
                            <select id = "nivel" name = "nivel" class="form-select" aria-label="Disabled select example" required>
                                <option selected disabled>Elige el nivel del curso</option>
                                <option value = '1'> 1º </option>    
                                <option value = '2'> 2º </option>    
                                <option value = '3'> 3º </option>    
                                <option value = '4'> 4º </option>    
                                <option value = '5'> 5º </option>    
                                <option value = '6'> 6º </option>    
                            </select>
                        </div>
                        <div class="col m-2">
                            <label for="cupos_max">
                                Cantidad maxima de alumnos:<br>
                            </label>
                            <input class="form-control" id="cupos_max" type="number" name="cupos_max" min="10" max="100" 
                             required> 
                        </div>
                    </div>
                   
                    <div class="mt-3 text-end me-2">
          
                        <a class="btn btn-danger" href="{{route('curso.index')}}">Cancelar</a>

                        <button type="submit"  class="btn btn-primary">
                            Registrar
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</section>
</div>
@endsection