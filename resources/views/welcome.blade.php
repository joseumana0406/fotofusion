<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/login.css">
    <title>Registro</title>
</head>
<body>


          <!-- Margen top -->
<div class="margen-top"></div>

<!-- LOGO  -->
<div  class="container-logo-login">
        <img class="masthead-avatar mb-5" width="100" height="120" src=""  />
</div>

<!-- contenedor de todos los campos-->

<form method="POST" enctype="multipart/form-data" action="{{ route('personal.login') }}" class="border p-3 form" name="send-form" style="margin: auto">
          @csrf
          <div class="form-element">
              <div class="mb-3">
                  <label class="form-label" id="cedulaPersonal-label">Cédula Personal:</label>
                  <input type="text" class="form-control" id="cedulaPersonal" name="cedulaPersonal" required><br>
              </div>
              <div class="mb-3">
                  <label class="form-label" id="contraseña-label">Contraseña:</label>
                  <input type="password" class="form-control" id="contraseña" name="contraseña" required><br>
              </div>
          </div> 
      
          <!-- Botón de login -->
          <div class="d-grid gap-2">
              <button type="submit" name="login" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Login</button>
          </div>
          
      </form>


        <!-- fotter  -->
<div class="footer-registro">
          <footer>
              <p >
              2023 – Fotofusión 
              </p>
          </footer>
      </div>
      
      

</body>
</html>
