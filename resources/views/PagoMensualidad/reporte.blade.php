<!DOCTYPE html>
<html>

<head>
    <title>Reporte Pago Mensualidad</title>
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
                        <img src="{{ public_path('img\logocr1.png') }}" width="120" height="120"
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
            <h2> RECIBO DE PAGO DE MENSUALIDAD </h2>
        </div>
        <br>
        <br>
        <table class="table table-bordered table-sm ">
            <tr>
                <th colspan="2"><b>Datos Tutor</b></th>
            </tr>
            <tr>
                <td><b>Nombre</b></td>
                <td>{{ $personaTutor->nombre . ' ' . $personaTutor->apellido_pat . ' ' . $personaTutor->apellido_mat }}
                </td>
            </tr>
            <tr>
                <td><b>CI</b></td>
                <td>{{ $personaTutor->ci }}</td>
            </tr>
            <tr>
                <td><b>Parentesco</b></td>
                <td>{{ $tutor->parentesco }}</td>
            </tr>
            <tr>
                <th colspan="2"><b>Datos Alumno</b></th>
            </tr>
            <tr>
                <td><b>Nombre</b></td>
                <td>{{ $personaAlumno->nombre . ' ' . $personaAlumno->apellido_pat . ' ' . $personaAlumno->apellido_mat }}
                </td>
            </tr>
            <tr>
                <td><b>Código RUDE</b></td>
                <td>{{ $alumno->cod_rude }}</td>
            </tr>
            <tr>
                <th colspan="2"><b>Acerca del Pago</b></th>
            </tr>
            <tr>
                <td><b>Nro Cuota</b></td>
                <td>{{ $pagoMen->nro_cuota }}</td>
            </tr>
            <tr>
                <td><b>Monto cancelado</b></td>
                <td>Bs. {{ $pago->monto }}</td>
            </tr>
        </table>
    </main>

</body>

</html>