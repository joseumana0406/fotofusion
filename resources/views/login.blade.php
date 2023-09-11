<!DOCTYPE html>
<html>
<head>
    <title>Login de Personal</title>
</head>
<body>

<h1>Login de Personal</h1>

<form action="{{ route('personal.login') }}" method="POST">
    @csrf
    <label for="cedulaPersonal">Cédula Personal:</label>
    <input type="text" id="cedulaPersonal" name="cedulaPersonal"><br>

    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña"><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
