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
    <h3>Recibo Pago Salario</h2>
    <p>{{ $pago->fecha }}</p>

    <table class="center">
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

</body>

</html>
