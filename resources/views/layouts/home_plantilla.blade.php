@extends('layouts.master')

@section('title', 'Home')
@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
        #sidebar {
            min-width: 200px;
            max-width: 200px;
            color: #fff;
            transition: all .5s;
            bottom: 0px;
            top: 0px;
         
        }
        #sidebar .sidebar-header {
            padding-top: 10px;
            text-align: center;
            font-family: 'Raleway', sans-serif;
            
        }
        .contenido{
            margin-left: 200px;
            padding-left: 0.5rem;
            transition: margin-left .5s;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #sidebarCollapse span {
                display: none;
            }
            .contenido{
                margin-left: 0px;
                padding-left: 0.5rem
            }
        }

      
    </style>
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
 
    <div  class="container-fluid p-0 d-flex ">
        <!--Sidebar-->
            <nav id = "sidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-primary position-fixed ">
                    <div class="sidebar-header p-0">
                        <img class="img-fluid" src="{{ asset('img\logocr1.png') }}" width="150" height="150"
                            alt="Logo Colegio Cristo Rey">
                            <h5 class=" text-white m-0">Colegio Cristo Rey</h5>
                    </div>
                    <hr >
                    <div class="sidebar-body overflow-auto mb-auto  ">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{route('home.index')}}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi bi-house-fill text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle collapsed" aria-expanded="false">
                                    <i class="fs-4 bi bi-pencil-square text-white"></i> <span class="ms-1 d-none d-sm-inline text-white ">Registro</span> </a>
                                <ul class="collapse show nav flex-column ms-1 text-white" id="submenu1" data-bs-parent="#menu">
                                    <div class="container">
                                        <li class="w-100">
                                            <a href="{{route('alumno.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Alumno</span> 1 </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{route('apoderado.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Apoderado</span> 1 </a>
                                        </li>
                                        @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                                        <li class="w-100">
                                            <a href="{{route('profesor.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Profesor</span> 2 </a>
                                        </li>
                                        @endif
                                        @if (Auth::user()->id_rol == 1)
                                        <li class="w-100">
                                            <a href="{{route('administrativo.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Administrativo</span> 2 </a>
                                        </li>
                                        @endif
                                    </div>  
                                </ul>
                            </li>
                            @if (Auth::user()->id_rol == 1)
                            <li>
                                <a href="{{route('usuario.index')}}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi bi-people text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Usuarios</span></a>
                            </li>
                            @endif
                            @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                            <li>
                                <a href="{{route('inscripcion.index')}}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi bi-card-checklist text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Inscripción</span></a>
                            </li>
                            @endif
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi bi-journal-bookmark-fill text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Academico</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <div class="container">
                                        <li class="w-100">
                                            <a href="{{route('curso.index', Date('Y'))}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Cursos</span> </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{route('materia.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Materias</span> </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{route('cardex.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Cardex</span> </a>
                                        </li>
                                        @if (Auth::user()->id_rol == 3)
                                        <li class="w-100">
                                            <a href="{{route('notas.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Notas</span> 2</a>
                                        </li>
                                        @endif
                                        <li class="w-100">
                                            <a href="{{route('boletin.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Boletin</span> 1</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi bi-wallet-fill text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Pagos</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <div class="container">
                                        <li class="w-100">
                                            <a href="{{route('mensualidad.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Mensualidad</span> 1</a>
                                        </li>
                                        <li class="w-100">
                                            <a href="{{route('salario.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Salario</span> 2</a>
                                        </li>                                    
                                    </div>
                                </ul>
                            </li>
                            @endif
                            @if (Auth::user()->id_rol == 1)
                                <li>
                                    <a href="{{route('bitacora.index')}}" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi bi-book-half  text-white"></i><span class="ms-1 d-none d-sm-inline text-white">Bicatora</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <hr>
                    <div class="dropdown p-0">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-bounding-box"></i>
                            <span class="d-none d-sm-inline mx-1">{{ Auth::user()->nombre_usuario }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="{{route('usuario.show', Auth::user()->id)}}">Mi usuario</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form style="display: inline" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="#" onclick="this.closest('form').submit()" class="nav-link text-white my-1 py-0 px-1">Cerrar sesión</a>
                            </form>
                        </ul>
                    </nav>

            
            <div class="contenido w-100 pl-5">
                <a class="btn btn-success" href="./"><i class="bi bi-arrow-return-left"></i></a>
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                    <strong>Exito!</strong> {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show m-10" role="alert">
                        <strong>Error!</strong> {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @section('navigation')
                @show
            </div>
        </div>
    </div>
<style>
    /*
    DEMO STYLE
*/



.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}



#sidebar.active {
    margin-left: -250px;
}



a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

.anyClass {
  height:150px;
  overflow-y: scroll;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */


</style>
@endsection
