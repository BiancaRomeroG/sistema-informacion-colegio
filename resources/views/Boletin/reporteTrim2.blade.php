<!DOCTYPE html>
<html>

<head>

    <title>Boletin</title>
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
        margin: 10px 0;
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
        <div style="text-align: center">
            <h1> BOLETIN DE CALIFICACIONES </h1>
        </div>
        <table style="border: 1px solid black; width: 100%; ">
            <tr>
                <td>
                    <p class="mb-1 ">
                        <b class="fw-bold text-secondary">Nombre Completo: </b> {{$persona->nombre}}
                        {{$persona->apellido_pat}} {{$persona->apellido_mat}}
                    </p>

                    <p class="mb-1"><b class="fw-bold text-secondary">Codigo Rude: </b> {{$alumno->cod_rude}}
                    </p>
                </td>
                <td>
                    <p class="mb-1"><b class="fw-bold text-secondary">Curso: </b> {{$cardex->id_curso}}°
                        Secundaria</p>
                    <p class="mb-1"><b class="fw-bold text-secondary">Trimestre: </b> 2</p>
                </td>
        </table>
        <br>
        <table class="table table-bordered table-sm ">
            <thead class="table-secondary">
                <tr>
                    <th>Asignatura</th>
                    <th>Ser</th>
                    <th>Saber</th>
                    <th>Hacer</th>
                    <th>Decidir</th>
                    <th>Nota Trimestral</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trimestre2 as $trimestre)
                <tr>
                    <td class="text-start">{{ $trimestre->nombre }}</td>
                    <td>{{ $trimestre->ser }}</td>
                    <td>{{ $trimestre->saber }}</td>
                    <td>{{ $trimestre->hacer }}</td>
                    <td>{{ $trimestre->decidir }}</td>
                    <td>{{ $trimestre->nota_trimestral }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </main>
</body>

</html>