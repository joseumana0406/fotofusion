<!DOCTYPE html>
<html>
<head>
    <title>Registro de Cliente</title>
</head>
<body>

<h1>Registrar Cliente</h1>

<form action="{{ url('api/clientes') }}" method="POST">
    @csrf
    <label for="cedulaCliente">Cédula:</label>
    <input type="text" id="cedulaCliente" name="cedulaCliente"><br>

    <label for="nombreCliente">Nombre:</label>
    <input type="text" id="nombreCliente" name="nombreCliente"><br>

    <label for="apellidoCliente">Apellido:</label>
    <input type="text" id="apellidoCliente" name="apellidoCliente"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion"><br>

    <button type="submit">Registrar</button>
</form>

</body>
</html>
