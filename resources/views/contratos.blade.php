<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>datatables</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

</head>

<body>

    <div class="top-bar">
        <a href="{{ route('admin') }}">Inicio</a>
        <a href="{{ route('registro') }}">Registro Clientes</a>
        <a href="{{ route('contratos') }}">Contratos</a>
        <a href="{{ route('registroContratos') }}">Registro de contratos</a>
        <a href="{{ route('personal') }}">Personal</a>
        <a href="{{ route('welcome') }}">Cerrar sesión</a>
    </div>
<header>

</header>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">

            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre Cliente</th>
                <th>Apellido Cliente</th>
                <th>Cedula Cliente</th>
                <th>Nombre Personal</th>
                <th>Apellido Personal</th>
                <th>Cedula Personal</th>
 		        <th>Número Contrato</th>
                <th>Costo</th>
                <th>Fecha Evento</th>
                <th>Lugar Evento</th>
                <th>Clave del servicio</th>
                <th>Tipo de Servicio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contratos as $contrato)
            <tr>
                <td>{{ $contrato['nombreCliente'] }}</td>
                <td>{{ $contrato['apellidoCliente'] }}</td>
                <td>{{ $contrato['cedulaCliente'] }}</td>
                <td>{{ $contrato['nombrePersonal'] }}</td>
                <td>{{ $contrato['apellidoPersonal'] }}</td>
                <td>{{ $contrato['cedulaPersonal'] }}</td>
                <td>{{ $contrato['numContrato'] }}</td>
                <td>{{ $contrato['costo'] }}</td>
                <td>{{ $contrato['fechaEvento'] }}</td>
                <td>{{ $contrato['lugarEvento'] }}</td>
                <td>{{ $contrato['idServicio'] }}</td>
                <td>{{ $contrato['tipoServicio'] }}</td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre Cliente</th>
                <th>Apellido Cliente</th>
                <th>Cedula Cliente</th>
                <th>Nombre Personal</th>
                <th>Apellido Personal</th>
                <th>Cedula Personal</th>
 		        <th>Número Contrato</th>
                <th>Costo</th>
                <th>Fecha Evento</th>
                <th>Lugar Evento</th>
            </tr>
        </tfoot>
    </table>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
    new DataTable('#example');
</script>



</body>
</html>
