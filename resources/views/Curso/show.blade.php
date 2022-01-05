@extends('layouts.home_plantilla')
@section('css')
    <style>
        @media(max-width: 768px){
            div > div.col-9{
                width: 93%;
                padding: 0%;
            }
        }
    </style>
@endsection
@section('title', 'Alumnos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Alumnos del curso {{$id}}° de Secundaria</h2>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-round-blue">
                    <thead class="table-head">
                        <tr>
                            <th>Nro</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th width="120px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                         ?>
                        @foreach ($personas as $persona)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido_pat }} {{ $persona->apellido_mat }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('alumno.show', $persona->id_alumno) }}">Ver</a>
                                    @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                                    <a class="btn btn-sm btn-secondary"
                                        href="{{ route('alumno.edit', $persona->id_alumno) }}">Editar</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.table-round-blue').DataTable( {
                destroy: true,
                paging:   false,
                ordering: false,
                searching: false,
                info:     false,
                responsive: true,
                autoWidth: false,    
                pagingType: "full_numbers",
                language: {
                    "lengthMenu": 'Mostrar <select class = "custom-select form-select form-select-sm">'+
                        '<option value="10">10</option>'+
                        '<option value="25">25</option>'+
                        '<option value="50">50</option>'+
                        '<option value="-1">Todos</option>'+
                        '</select> registros',
                    "zeroRecords": "No existen resultados",
                    "info": "Mostrando _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay resultados",
                    "infoFiltered": "(filtrado de _MAX_ total registros totales)",
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
@endsection
