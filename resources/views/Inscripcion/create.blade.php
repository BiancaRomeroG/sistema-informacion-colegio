@extends('layouts.home_plantilla')

@section('title', 'Inscripción')

@section('css')
<style>
    .dataTables_filter {
        display: none;
     }
    #table-inscripcion_length{
        display:none;
    }     
</style>
 
@endsection
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
                                <div class="input-group">
                                    <input type="search" class="form-control" id="searchbox" name="nombre" placeholder="Buscar Alumnos" >
                                </div>
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
                        <table id ="table-inscripcion" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>&nbsp</th>
                                    <th>Nombre Completo</th>
                                    <th>C.I.</th>
                                    <th>Sexo</th>
                                    <th>Fecha nac.</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personas as $persona)
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio"  id ="id_alumno" name="id_alumno" class="custom-control-input " value="{{$persona->idAlumno}}"></td>
                                            </div>
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
                            </tbody>
                        </table>
                        {!! $errors->first('id_alumno', '<span class="text-danger">*:message</span>') !!}
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="curso" class="mb-2">
                                Curso a inscribir
                            </label>
                            <select name="curso" id="curso" class="form-select" aria-label="Default select example">
                                <option selected disabled>Seleccione el curso</option>
                                <option value="1" {{old('curso') == "1"? 'selected':''}}>1° Secundaria</option>
                                <option value="2" {{old('curso') == "1"? 'selected':''}}>2° Secundaria</option>
                                <option value="3" {{old('curso') == "1"? 'selected':''}}>3° Secundaria</option>
                                <option value="4" {{old('curso') == "1"? 'selected':''}}>4° Secundaria</option>
                                <option value="5" {{old('curso') == "1"? 'selected':''}}>5° Secundaria</option>
                                <option value="6" {{old('curso') == "1"? 'selected':''}}>6° Secundaria</option>
                            </select>
                            {!! $errors->first('curso', '<span class="text-danger">*:message</span>') !!} 
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
@section('js')
<script>
  
    $(document).ready(function() {
        $('#table-inscripcion').DataTable( {
            destroy: true,
            paging:   true,
            pageLength: 5,
            ordering: true,
            info:     true,
            responsive: true,
            autoWidth: false,    
       
            language: {
                "lengthMenu": 'Mostrar <select class = "custom-select form-select form-select-sm">'+
                    '<option value="5">5</option>'+
                    '<option value="25">25</option>'+
                    '<option value="50">50</option>'+
                    '<option value="-1">Todos</option>'+
                    '</select> registros',
                "zeroRecords": "No existen resultados",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "No hay resultados",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Último",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
            }
        } );
    } );
</script>

<script>
    $(document).ready(function(){ 

    var table = $('#table-inscripcion').DataTable();

    $('#searchbox').on( 'keyup', function () {
       console.log("hola");
    table.search( this.value ).draw();
    } );
});

</script>
@endsection