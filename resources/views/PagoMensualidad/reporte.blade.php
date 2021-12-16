<!DOCTYPE html>
<html>

<head>
    <title>Reporte Pago Mensualidad</title>
    <style>
        h2,
        h3 {
            text-align: center; 
        }
        p {
            text-align: center; 
            margin-bottom: 100px
        }
        table,
        td,
        th {
            border: 1px solid black;
            padding: 8px;
        }

        table {
            width: 75%;
            border-collapse: collapse;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>

<body>
    <h2>Colegio Cristo Rey</h2>
    <h3>Recibo Pago Mensualidad</h2>
    <p>{{ $pago->fecha }}</p>

    <table class="center">
        <tr>
            <th colspan="2"><b>Datos Tutor</b></th>
        </tr>
        <tr>
            <td><b>Nombre</b></td>
            <td>{{ $personaTutor->nombre . ' ' . $personaTutor->apellido_pat . ' ' . $personaTutor->apellido_mat }}</td>
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
            <td>{{ $personaAlumno->nombre . ' ' . $personaAlumno->apellido_pat . ' ' . $personaAlumno->apellido_mat }}</td>
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

</body>

</html>
