<!DOCTYPE html>
<html>
<head>
    <title>Información de Contratos</title>
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


<table border="1">
    <tr>
        <th>Nombre Cliente</th>
        <th>Apellido Cliente</th>
        <th>Cédula Cliente</th>
        <th>Nombre Personal</th>
        <th>Apellido Personal</th>
        <th>Cédula Personal</th>
        <th>Número Contrato</th>
        <th>Costo</th>
        <th>Fecha Evento</th>
        <th>Lugar Evento</th>
    </tr>

    
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
    </tr>
@endforeach



</table>

</body>
</html>
