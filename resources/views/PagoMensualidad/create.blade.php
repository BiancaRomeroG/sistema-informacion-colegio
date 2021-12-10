@extends('layouts.home_plantilla')

@section('title', 'Pago de Mensualidad')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-10">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Pago de Mensualidades</h5>
            </div>

                <div class="card-body p-4">
                    <div class="row mb-3">
                        <div class="col-5 m-2">
                            <form method="GET" action="{{route('mensualidad.create')}}">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="nombreInput" name="id" placeholder="ID Alumno" value="">
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
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Nombre Apoderado: </b> {{$personaApoderado->nombre.' '.$personaApoderado->apellido_pat.' '.$personaApoderado->apellido_pat}}</p>
                                        </div>
                                        <div class="col mb-2">
                                            <strong class="mt-2">Datos Academicos</strong>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">ID Alumno: </span> {{$alumno->id}}</p>
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Curso: </span> {{$inscripcion->curso}}° Secundaria</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Codigo RUDE: </b> {{$alumno->cod_rude}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <form method="POST" action="{{route('mensualidad.store')}}" id="form-reg">
                    @csrf
                    <input type="hidden" name="id_tutor" value="{{$apoderado->id}}">
                    <div class="row m-2">
                        <div class="col-4 m-2">
                            <label for="monto" class="fw-bold">
                                Monto: <br>
                                <input type="number" name="monto" id="monto" placeholder="Monto Bs.">
                            </label>
                        </div>
                        <div class="col-4 m-2">
                            <label for="cuota" class="fw-bold">
                                Cuota: <br>
                                <input type="number" name="cuota" id="cuota" placeholder="Nro. de cuota">
                            </label>
                        </div>
                    </div>
                    <div class="row-2 text-end m-2">
                        <a class="btn btn-danger" href="{{route('mensualidad.index')}}">Cancelar</a>
                        <button type="submit" class="btn btn-primary" form="form-reg">Registrar</button>
                    </div>
                </form>
        </div>
    </div>
</section>


@endsection