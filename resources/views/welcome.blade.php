<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!--clases-personalizadas-->
    <link rel="stylesheet" href="css/table-round-blue.css">
    <!--Buscador dinamico de tablas-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    
      
    <style>
        .row-striped:nth-of-type(odd) {
            background-color: #c9d5fc;
        }

        .row-striped:nth-of-type(even) {
            background-color: #ffffff;
        }

      
        
    </style>
    <title>@yield('title')</title>
</head>

<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--Sidebar-->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-2 col-md-2 col-xl-2 px-sm-2 px-0 bg-primary position-fixed">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <div class="container">
                        <img class="img-fluid" src="{{ asset('img\logocr1.png') }}" width="150" height="150"
                            alt="Logo Colegio Cristo Rey">
                    </div>
                    <h5 class="mx-2 text-white">Colegio Cristo Rey</h5>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start m-3" id="menu">
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
                    <hr>
                    <div class="dropdown pb-4">
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
                    </div>
                </div>
            </div>

            
            <div class="col-10 offset-2">
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
                <table id="example" class="display table table-bordered" style="width:100%">
                  <thead class="thead-primary">
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                      </tr>
                      <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                      </tr>
                      <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                      </tr>
                      <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                      </tr>
                      <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                      </tr>
                      <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                      </tr>
                      <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                      </tr>
                      <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                      </tr>
                      <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                      </tr>
                      <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                      </tr>
                      <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                      </tr>
                      <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                      </tr>
                      <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                      </tr>
                      <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                      </tr>
                      <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                      </tr>
                      <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                      </tr>
                      <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                      </tr>
                      <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                      </tr>
                      <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                      </tr>
                      <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                      </tr>
                      <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                      </tr>
                      <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                      </tr>
                      <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sydney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                      </tr>
                      <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                      </tr>
                      <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                      </tr>
                      <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                      </tr>
                      <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                      </tr>
                      <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                      </tr>
                      <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                      </tr>
                      <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sydney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                      </tr>
                      <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                      </tr>
                      <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                      </tr>
                      <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                      </tr>
                      <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                      </tr>
                      <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                      </tr>
                      <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                      </tr>
                      <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                      </tr>
                      <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                      </tr>
                      <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                      </tr>
                      <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                      </tr>
                      <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                      </tr>
                      <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                      </tr>
                      <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                      </tr>
                      <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                      </tr>
                      <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                      </tr>
                      <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                      </tr>
                      <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                      </tr>
                      <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                      </tr>
                      <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                      </tr>
                      <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                      </tr>
                      <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                      </tr>
                      <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                      </tr>
                      <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                      </tr>
                      <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                      </tr>
                      <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                      </tr>
                      <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                      </tr>
                  </tbody>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </tfoot>
              </table>
            </div>
        </div>
    </div>
<style>
    /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

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

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
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
}
</style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{{--  Buscador dinamico de tablas  --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function() {
   console.log($('#example').dataTable({
      "paging":   true,
      "ordering": true,
      "info":     true
  }));
} );
</script>


</html>

