@extends('layouts.home_plantilla')

@section('title', 'Pago de Salario')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Pago de Salarios</h5>
            </div>

                <div class="card-body p-4">
                    <div class="row mb-3">
                        <div class="col-5 m-2">
                            <form method="GET" action="{{route('salario.create')}}">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="nombreInput" name="id" placeholder="ID Profesor" value="">
                                    <button class="btn btn-outline-primary" type="submit" id="buscar">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col">
                                            <strong class="mt-2">Datos Personales</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Nombre completo: </span>{{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b> {{$persona->ci}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Sexo: </b> {{$persona->sexo}}</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Fecha Nacimiento: </b> {{$persona->fecha_nac}}</p>
                                        </div>
                                        <div class="col mb-2">
                                            <strong class="mt-2">Datos Personales</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">ID Profesor: </span> {{$profesor->id}}</p>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Profesion: </span> {{$profesor->profesion}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <form method="POST" action="{{route('salario.store')}}" id="form-reg">
                    @csrf
                    <input type="hidden" name="id_profesor" value="{{$profesor->id}}">
                    <div class="row m-2">
                        <div class="col-4 m-2">
                            <label for="monto" class="fw-bold">
                                Monto: <br>
                                <input type="number" name="monto" id="monto" placeholder="Monto Bs.">
                            </label>
                        </div>
                        <div class="col-4 m-2">
                            <label for="pago" class="fw-bold">
                                Nro. Pago: <br>
                                <input type="number" name="pago" id="pago" placeholder="Nro. de pago">
                            </label>
                        </div>
                    </div>
                    <div class="row-2 text-end m-2">
                        <a class="btn btn-danger" href="{{route('salario.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-primary" form="form-reg">Registrar</button>
                    </div>
                </form>
        </div>
    </div>
</section>


@endsection