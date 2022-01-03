@extends('layouts.master')

@section('title', 'Login')

@section('content')

    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand mx-5" href="#">
            <img src="img\logocr1.png" width="100" height="100" alt="Logo Colegio Cristo Rey">
            <span class="mx-2 text-white h1">Colegio Cristo Rey</span>
        </a>
    </nav>

    <!--Login Form-->
    <section class="">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h3 class="mb-4 text-center">Login</h3>
                            <form class = "form" method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name = "nombre_usuario" required
                                        placeholder="Ingrese su usuario">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name = "password" required
                                        placeholder="Ingrese su contraseña">
                                </div>
                                @error('nombre_usuario')
                                <div class="alert alert-danger mt-1">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary ">Iniciar sesión</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

