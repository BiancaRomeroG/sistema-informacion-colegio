@extends('layouts.home_plantilla')

@section('title', 'Inscripción')

@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow m-5">
            <div class="card-header text-center">
                <h5 class="m-2">Inscripción alumno</h5>
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <p class="mb-1">Código del alumno</p>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <button class="btn btn-outline-primary" type="button" id="buscar">Buscar</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-around">
                                        <div class="col m-2">
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Nombre completo: </span> Nombre alumno</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b> Ci alumno</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Sexo: </b> Sexo alumno</p>
                                            <p class="mb-1"><b class="fw-bold  text-secondary">Fecha Nacimiento: </b> 00/00/00</p>
                                        </div>
                                        <div class="col m-2">
                                            <p class="mb-1 "><span class="fw-bold text-secondary">Dirección: </span> Dirección alumno</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Email: </b> alumno@gmail.com</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Telefono: </b> 13213123</p>
                                            <p class="mb-1"><b class="fw-bold text-secondary">Código Rude: </b> 098097ASD89172</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="curso">
                                Curso a inscribir
                            </label>
                            <select id="curso" class="form-select" aria-label="Default select example">
                                <option selected>Seleccione el curso</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 text-end me-2">
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