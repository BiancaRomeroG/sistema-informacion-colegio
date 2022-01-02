@extends('layouts.home_plantilla')

@section('title', 'Cardex')

@section('css')
<style>
    .dataTables_filter {
        display: none;
     }
    #table-cardex_length{
        display:none;
    }     
</style>
 
@endsection

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Búsqueda de cardex por alumno</h5>
            </div>
            <div class="card-body p-4">
                <div class="row mb-3 justify-content-around">
                    <div class="col m-2 ">
                            <div class="input-group">
                                <input type="search" class="form-control" id="searchbox" name="nombre" placeholder="Buscar Alumnos">
                            </div>
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
                        <table id = "table-cardex" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>&nbsp</th>
                                    <th>Nombre Completo</th>
                                    <th>C.I.</th>
                                    <th>Sexo</th>
                                    <th>Curso</th>
                                    <th>Cod. RUDE</th>
                                </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                  
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
@section('js')
<script>
  
    $(document).ready(function() {
        $('#table-cardex').DataTable( {
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

    var table = $('#table-cardex').DataTable();

    $('#searchbox').on( 'keyup', function () {
        console.log("hola");
    table.search( this.value ).draw();
    } );
});

</script>
@endsection