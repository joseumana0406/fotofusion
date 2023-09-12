<!DOCTYPE html>
<html>
<head>
    <title>Información de Contratos</title>
</head>
<body>

    <div class="top-bar">
        <a href="{{ route('admin') }}">Inicio</a>
        <a href="{{ route('registro') }}">Registro</a>
        <a href="{{ route('contratos') }}">Contratos</a>
        <a href="{{ route('clientes') }}">Clientes</a>
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
            <td>{{ $contrato['nombre_cliente'] }}</td>
            <td>{{ $contrato['apellido_cliente'] }}</td>
            <td>{{ $contrato['cedula_cliente'] }}</td>
            <td>{{ $contrato['nombre_personal'] }}</td>
            <td>{{ $contrato['apellido_personal'] }}</td>
            <td>{{ $contrato['cedula_personal'] }}</td>
            <td>{{ $contrato['num_contrato'] }}</td>
            <td>{{ $contrato['costo'] }}</td>
            <td>{{ $contrato['fecha_evento'] }}</td>
            <td>{{ $contrato['lugar_evento'] }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>
