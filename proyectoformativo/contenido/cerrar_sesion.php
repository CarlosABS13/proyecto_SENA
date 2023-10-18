<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cerrar sesión</title>
  <link rel="stylesheet" href="../css/cerrar_sesion.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>

  </style>
</head>

<body>
  <?php require('../php/header.php')?>

  <main class="container">
    <div class="seccion-fija">
      <div class="row">
        <div class="col-12 col-lg-10">
          <div class="d-flex flex-row">
            <img src="/images/logo.png" alt="" class="logoi">
            <h4 class="mt-4 text-center text-black">SENA</h4>
          </div>
        </div>
        <div class="col-12 col-lg-2">
          <button id="cerrarSesionBtn"><img src="/images/cerrar-sesion.png" alt="">Cerrar Sesión</button>
        </div>
      </div>
    </div>

    <div class="seccion-con-scroll">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates ab commodi delectus quisquam autem
        iure omnis dolores quasi minus dolorum voluptas saepe soluta doloremque, quidem amet. Nulla, ducimus voluptates?
      </p>
    </div>

  </main>


  <script src="../js/formulario.js"></script>
  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const cerrarSesionBtn = document.getElementById("cerrarSesionBtn");

    cerrarSesionBtn.addEventListener("click", function () {
      // Elimina la información de la sesión o redirige al usuario a la página de inicio de sesión
      // Por ejemplo, si estás utilizando sesiones en el lado del servidor, puedes hacer una solicitud al servidor para destruir la sesión.
      // Si no estás utilizando sesiones en este momento, simplemente puedes redirigir al usuario a la página de inicio de sesión.

      // Para redirigir al usuario a la página de inicio de sesión:
      window.location.href = "/contenido/inicio.php";
    });
  </script>

</body>

</html>