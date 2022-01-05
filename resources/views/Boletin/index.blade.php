@extends('layouts.home_plantilla')

@section('title', 'boletin')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-1 card">
            <div class="row justify-content-between mb-2 card-header">
                <div class="col">
                    <h2>Boletines de cursos</h2>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-round-blue table-striped">
                    <thead class="table-head">
                        <tr>
                            <th>Curso</th>
                            <th> Cupo maximo </th>
                            <th>Cantidad de alumnos</th>
                            <th width="120px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                            <tr>
                                
                                <td class="text-center">{{ $curso->nivel }}º de secundaria</td>
                                <td class="text-center"> {{$curso->cupo_max}} </td>
                                <td class="text-center">{{ $curso->cant_alumnos}}</td>
                                <td class="text-center">
                                    <!-- {{$curso->id}} -->
                                    <a class="btn btn-sm btn-primary" href="{{ route('boletin.show', $curso->id) }}"> Ver</a>
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
        $('.table-round-blue').DataTable({
            destroy: true,
            paging: false,
            searching: false,
            ordering: true,
            info: false,
            responsive: true,
            autoWidth: false,  
        });
    });
</script>
@endsection