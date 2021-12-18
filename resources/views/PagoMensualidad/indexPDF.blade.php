<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    .page-break {
        page-break-after: always;
    }

    body {
      font-family: "Times New Roman", serif;
      margin: 1.5cm 1cm 2cm 1cm;
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
          <td style = "width: 5%">
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
              LISTA DE PAGO DE MENSUALIDADES {{DATE('Y')}}
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
    <h1 > Lista de pagos de mensualidades {{Date('Y')}} </h1>
    </div>
  
    <br>
  

    @foreach($pagos as $key => $personas)
        <div id="content">
            <h3> Lista de pagos del mes de {{$meses[$key]}} </h3>  
            <table class="table table-bordered table-sm">
                <thead class="thead-dark">
                    <tr style = "text-align: center">
                        <th>Nro</th>
                        <th>Nombre del estudiante</th>
                        <th>Codigo Rude</th>
                        <th>Nombre del tutor</th>
                        <th>Fecha del pago</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    {{$i = 0}}
                    @foreach ($personas as $persona)
                        <tr>
                            <td style = "text-align: center">{{ ++$i }}</td>
                            <td >{{$persona->apellido_pat}} {{$persona->apellido_mat}} {{ $persona->nombre}}</td>
                            <td style = "text-align: center">{{ $persona->cod_rude}}</td>
                            <td >{{$persona->apellido_pat_tutor}} {{$persona->apellido_mat_tutor}} {{ $persona->nombre_tutor}}</td>
                            @if ($persona->fechaPago == null)
                                <td style = "text-align: center; color: #FF0000;">Sin pagar</td>
                                <td style = "text-align: center; color: #FF0000;">Sin pagar</td>
                            @else
                                <td style = "text-align: center">{{ $persona->fechaPago}}</td>
                                <td style = "text-align: center">{{ $persona->monto}}</td>
                            @endif
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>    
        @if ( ($key != count($pagos)-1) && $pagos[$key+1]!= null  )
            <div class="page-break"></div>
        @endif
    @endforeach
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