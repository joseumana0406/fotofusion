<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<title>Citas</title>
</head>

<body>

    <div class="top-bar">
        <a href="{{ route('admin') }}">Inicio</a>
        <a href="{{ route('registro') }}">Registro</a>
        <a href="{{ route('citas') }}">Citas</a>
        <a href="{{ route('clientes') }}">Clientes</a>
        <a href="{{ route('personal') }}">Personal</a>
        <a href="{{ route('welcome') }}">Cerrar sesión</a>
    </div>
      
      <div class="container mt-5">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>Número de Contrato</th>
                      <th>Cédula del Cliente</th>
                      <th>Cédula del Personal</th>
                      <th>Costo</th>
                      <th>Fecha del Evento</th>
                      <th>Lugar del Evento</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($contratos as $contrato)
                      <tr>
                          <td>{{ $contrato->numContrato }}</td>
                          <td>{{ $contrato->cedulaCliente }}</td>
                          <td>{{ $contrato->cedulaPersonal }}</td>
                          <td>{{ $contrato->costo }}</td>
                          <td>{{ $contrato->fechaEvento }}</td>
                          <td>{{ $contrato->lugarEvento }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      
      </body>
      </html>
      
