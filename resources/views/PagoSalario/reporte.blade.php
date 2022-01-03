<!DOCTYPE html>
<html>

<head>
    <title>Reporte Pago Salario</title>
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
        margin: 2.5cm 1cm 2cm 1cm;
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

    header h1 {
        margin: 0 0 10px 0;
    }

    header h2 {
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

    th {
        text-align: center
    }
    </style>
</head>

<body>
    <header>
        <table style="width: 100%">
            <tr>
                <td style="width: 8%">
                    <div>
                        <img src="./img/logocr1.png" width="120" height="120"
                            alt="Logo Colegio Cristo Rey">
                    </div>
                </td>
                <td>
                    <p style="text-align: left">
                        COLEGIO CRISTO REY
                    </p>
                </td>
                <td>
                    <p style="text-align: right">
                        EDUCANDO PARA LA ETERNIDAD
                    </p>
                </td>
            </tr>
        </table>
    </header>

    <main>
        <br>
        <br>
        <div style="text-align: center">
            <h2> RECIBO DE PAGO DE SALARIO </h2>
        </div>

        <table class="table table-bordered table-sm ">
            <tr>
                <th colspan="2"><b>Datos Profesor</b></th>
            </tr>
            <tr>
                <td><b>Nombre</b></td>
                <td>{{ $persona->nombre . ' ' . $persona->apellido_pat . ' ' . $persona->apellido_mat }}</td>
            </tr>
            <tr>
                <td><b>CI</b></td>
                <td>{{ $persona->ci }}</td>
            </tr>
            <tr>
                <th colspan="2"><b>Acerca del Pago</b></th>
            </tr>
            <tr>
                <td><b>Nro Cuota</b></td>
                <td>{{ $pagoSalario->nro_pago }}</td>
            </tr>
            <tr>
                <td><b>Monto bruto</b></td>
                <td>Bs. {{ $pago->monto }}</td>
            </tr>
            <tr>
                <td><b>Descuento IVA</b></td>
                <td>Bs. {{$pagoSalario->descuento_iva}}</td>
            </tr>
            <tr>
                <td><b>Aporte AFP</b></td>
                <td>Bs. {{$pagoSalario->aporte_afp}}</td>
            </tr>
            <tr>
                <td><b>Monto neto</b></td>
                <td>Bs. {{$pago->monto - $pagoSalario->descuento_iva - $pagoSalario->aporte_afp}} Bs.</td>
            </tr>
        </table>

    </main>

</body>

</html>