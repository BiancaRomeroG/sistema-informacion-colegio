<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Login</title>
</head>

<body class="bg-light">

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
                            <form>
                                <div class="form-group mb-4">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario"
                                        placeholder="Ingrese su usuario">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Ingrese su contraseña">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary ">Iniciar sesión</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>