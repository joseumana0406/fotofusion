<!DOCTYPE html>
<html>
<head>
    <title>Registro de Cliente</title>
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

    <h1>Registrar Contratos</h1>

    <form action="{{ url('api/registrarc') }}" method="POST">
        @csrf
        <label for="numContrato">Número de Contrato:</label>
        <input type="text" id="numContrato" name="numContrato"><br>
    
        <label for="cedulaCliente">Cédula del Cliente:</label>
        <input type="text" id="cedulaCliente" name="cedulaCliente"><br>
    
        <label for="cedulaPersonal">Cédula del Personal:</label>
        <input type="text" id="cedulaPersonal" name="cedulaPersonal"><br>
    
        <label for="costo">Costo:</label>
        <input type="text" id="costo" name="costo"><br>
    
        <label for="fechaEvento">Fecha del Evento:</label>
        <input type="date" id="fechaEvento" name="fechaEvento"><br>
    
        <label for="lugarEvento">Lugar del Evento:</label>
        <input type="text" id="lugarEvento" name="lugarEvento"><br>
    
        <button type="submit">Registrar</button>
    </form>
    

</body>
</html>