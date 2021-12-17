<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>

    body {
      font-family: "Times New Roman", serif;
      margin: 1.5cm 1cm 1cm;
    }
    
    @page {
        margin: 0cm 1cm;
    }
    header { 
      position: fixed;
      left: 0cm;
      top: 0.25cm;
      right: 0cm;
      height: 50px;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0cm;
      bottom: 1cm;
      right: 0cm;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>

 
<body>
  <header>
    <table style="width: 100%"> 
      <tr>
          <td style = "width: 8%">
            <div >
                <img  src="{{ public_path('img\logocr1.png') }}" width="50" height="50"
                    alt="Logo Colegio Cristo Rey">
            </div>
          </td> 
          <td> 
            <p style = "text-align: left">
              COLEGIO CRISTO REY 
            </p>         
          </td>
          <td> 
            <p style = "text-align: right">
              REPORTE DE BITACORA
            </p>
          </td>
        </tr>
    </table>
  
  </header>


  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
             Educando para la eternidad
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <main>
    <div style= "text-align: center">
    <h1 > REPORTE DE BITACORA </h1>
    </div>
    <div>
      <table style="border: 1px solid black; width: 100%; ">
        <tr >
          <td colspan="2" >
            <p class="mb-1 "><b class="fw-bold text-secondary">Nombre completo: </b> {{$persona->nombre}} {{$persona->apellido_pat}} {{$persona->apellido_mat}}</p>
          </td>
        </tr>
        <tr>
          <td style="width: 50%">
            <p class="mb-1"><b class="fw-bold  text-secondary">ID Usuario: </b> {{$persona->idUsuario}}</p>          </td>
          <td>
            <p class="mb-1"><b class="fw-bold text-secondary">Tipo de Usuario: </b> 
              @if($persona->id_rol==3)
                  Profesor
              @elseif($persona->id_rol==2)
                  Administrativo
              @else
                  Administrador
              @endif </p>
          </td>
        </tr>
        <tr>
          <td>
            <p class="mb-1"><b class="fw-bold  text-secondary">Ci: </b> {{$persona->ci}}</p>          </td>
          <td>
            <p class="mb-1"><b class="fw-bold text-secondary">Email: </b> {{$persona->email}}</p>
          </td>
        </tr>
        <tr>
          <td>
            <p class="mb-1"><b class="fw-bold  text-secondary">Sexo: </b> {{$persona->sexo}}</p>
          </td>
          <td>
            <p class="mb-1"><b class="fw-bold text-secondary">Telefono: </b> {{$persona->telefono}}</p>
          </td>
        </tr>
        <tr>
          <td>
            <p class="mb-1"><b class="fw-bold  text-secondary">Fecha Nacimiento: </b> {{$persona->fecha_nac}}</p>
          </td>
          <td>
            <p class="mb-1 "><b class="fw-bold text-secondary">Dirección: </b> {{$persona->direccion}}</p>
          </td>
        </tr>
      </table>
    </div>
  
    <br>

  
    <div id="content">
      <h3> Lista de acciones </h3>  
      <table class="table table-bordered table-sm">
          <thead class="thead-dark">
              <tr style = "text-align: center">
                  <th>Nro</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Descripción</th>
              </tr>
          </thead>
          <tbody>
              {{$i = 0}}
              @foreach ($acciones as $accion)
                  <tr>
                      <td style = "text-align: center">{{ ++$i }}</td>
                      <td style = "text-align: center">{{ Carbon\Carbon::parse($accion->fecha)->format('d-m-Y')}}</td>
                      <td style = "text-align: center">{{ Carbon\Carbon::parse($accion->fecha)->format('H:i:s')}}</td>
                      <td>{{ $accion->descripcion}} </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </main>
  

</body>
</html>
{{--  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="h1">
                Reporte
            </h1>
            <br>
            <br>
            <table class="table mt-5 table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="border">Informacion</th>
                        <th scope="border">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($acciones as $accion)
                    <tr>
                        <th class="text-left">{{$accion->fecha}}</th>
                        <td class="text-right">{{$accion->descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <footer class="float-right">
        <small class="text-muted">
            {{Carbon\Carbon::parse(Carbon\Carbon::now())->locale('es_ES')->isoFormat('LLLL')}}
        </small>
    </footer>
</body>

</html>  --}}