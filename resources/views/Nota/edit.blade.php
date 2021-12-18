@extends('layouts.home_plantilla')

@section('title', 'Vista de cardex')

@section('navigation')
<form action="{{route('mod.notas')}}" method="POST">
    @csrf
    <section class="row justify-content-center" id="main">
        <div class="col-10">
            <div class="card shadow m-5">
                <div class="card-header text-center">
                    <h5 class="m-2">Modificacion de notas</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <select class="form-control" name="nro_trim">
                                <option value="1" selected>Trimestre 1</option>
                                <option value="2">Trimestre 2</option>
                                <option value="3">Trimestre 3</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_curso" value="{{$id_curso}}">
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <button class="btn btn-primary" type="submit">Editar Notas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection