<?php
$registrado = isset($_GET['registrado']) && $_GET['registrado'] === 'true';

if ($registrado) {
    // Mostrar modal 
    echo"
    <script>
        window.onload = function() {
            var modal = document.getElementById('mimodal');
            modal.style.display = 'block';
        }
    </script>
    ";
}

//recibir informacion: nombre, cedula: enlace de video
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
$cedula = isset($_GET['cedula']) ? $_GET['cedula'] : '';
$enlace_video = isset($_GET['enlace_video']) ? $_GET['enlace_video'] : '';
?>


<!-- Modal -->
<div id="mimodal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Información ingresada correctamente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Nombre: <?php echo $nombre; ?></p>
      <p>Cédula: <?php echo $cedula; ?></p>
      <p>Enlace del video: <?php echo $enlace_video; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="copiar-btn">Copiar link de video</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript para cerrar el modal -->
<script>
  document.getElementById('copiar-btn').addEventListener('click', function() {
    var enlaceVideo = "<?php echo $enlace_video; ?>";

    // Crear un elemento de textarea temporal
    var textarea = document.createElement('textarea');
    textarea.value = enlaceVideo;
    document.body.appendChild(textarea);

    // Seleccionar el contenido del textarea
    textarea.select();
    textarea.setSelectionRange(0, 99999); // Para dispositivos móviles

    // Copiar el contenido al portapapeles
    document.execCommand('copy');

    // Eliminar el textarea temporal
    document.body.removeChild(textarea);
  });
    var closeBtn = document.getElementsByClassName('btn-secondary')[0];
    closeBtn.onclick = function() {
        var modal = document.getElementById('mimodal');
        modal.style.display = 'none';
    }
        var closeBtn = document.getElementsByClassName('btn-close')[0];
    closeBtn.onclick = function() {
        var modal = document.getElementById('mimodal');
        modal.style.display = 'none';
    }
</script>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css">
    <title>Registro</title>
</head>
<body>

<!-- Margen top -->
<div class="margen-top"></div>

<!-- LOGO  -->
<div  class="container-logo-login">
        <img class="masthead-avatar mb-5" width="100" height="120" src="./imagenes/logo.png"  />
</div>

<!-- contenedor de todos los campos-->
<form   method="POST" enctype="multipart/form-data" action="./procesar_video.php"  class="border p-3 form" name="send-form" style="margin: auto">
  <div class="form-element">
    <div class="mb-3">
        <label class="form-label" id="nombre-label">Nombre</label>           <!-- class="form-control pertenece a bootstrap -->
        <input type="text" class="form-control" name="nombre" pattern="[A-Za-záÁéÉíÍóÓúÚüÜñÑ\s]+" title="El nombre solo puede contener letras"  required />    <!--campo nombre  requerido-->
        <?php if (!empty($error) && strpos($_SERVER['REQUEST_URI'], 'procesar_video.php') !== false): ?>
                <div class="text-danger"><?php echo $error; ?></div>
            <?php endif; ?>
        <label class="form-label" id="cedula-label" >Cédula</label>
        <input type="text" class="form-control" name="cedula" pattern="[A-Za-z0-9-]+" title="La cédula solo puede contener letras, números y guiones" required />   <!--campo cedula  requerido-->
        <?php if (!empty($error) && strpos($_SERVER['REQUEST_URI'], 'procesar_video.php') !== false): ?>
                <div class="text-danger"><?php echo $error; ?></div>
            <?php endif; ?>

        <label  class="form-label" id="video-label" >Video</label>    
    <input  type="file" class="form-control" name="video">
  </div>
</div> 

<!-- Boton de registro -->
<div class="d-grid gap-2" >
        <button type="submit" name="login" class="btn btn-outline-success " data-toggle="modal" data-target="#exampleModal">Registrar</button>
</div>

</div>

</form>

  <!-- fotter  -->
<div class="footer-registro">
    <footer>
        <p >
        2023 – PROCURADURÍA GENERAL DE LA NACIÓN / MINISTERIO PÚBLICO DE PANAMÁ
        </p>
    </footer>
</div>


</body>

</html>
