<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include('../php/header.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Notificaciones</title>
  <link rel="stylesheet" href="/css/notificaciones.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h4>Notificaciones</h4>
    <div class="row">
      <div class="col-sm-4">
        <input type="text" id="txt-message" class="form-control" placeholder="Toast message" autofocus />
      </div>
      <div class="col-sm-4 boton">
        <button type="button" id="btn-toast" class="btn botonv">Notificar</button>
      </div>
    </div>
  </div>

  <!-- toast -->
  <div class="toast align-items-center text-white bg-primary border-0 mt-5 me-5 position-absolute top-0 end-0"
    style="background-color:#A9C948 !important;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">-</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
        aria-label="Close"></button>
    </div>
  </div>

  <div class="container">
    <!-- ... Resto de tu código HTML ... -->
    <p>Nivel de agua: <span id="nivel-agua"></span></p>
  </div>

  <script type="module">
    const toast = msg => {
      const nivelDeAgua = obtenerNivelDeAgua(); // Obtén el nivel de agua simulado
      const $toast = document.querySelectorAll(".toast")[0];
      const $toastbody = $toast.getElementsByClassName("toast-body")[0];

      // Como segundo parámetro admite opciones como: animation, autohide, delay
      const bootToast = new bootstrap.Toast($toast);
      if ($toastbody) {
        // Muestra el mensaje junto con el nivel de agua
        $toastbody.innerText = `${msg}\nNivel de agua: ${nivelDeAgua.toFixed(5)}`;
        bootToast.show();
      }
      // Agregar notificación push
      if ('Notification' in window) {
        Notification.requestPermission().then(function (permission) {
          if (permission === 'granted') {
            const notification = new Notification('Notificación Push', {
              body: `${msg}\nNivel de agua: ${nivelDeAgua.toFixed(5)}`,
              icon: '../images/logo.png', // Ruta de tu icono
            });
          }
        });
      }
    };

    document.getElementById("btn-toast").addEventListener("click", () => {
      const $txtmessage = document.getElementById("txt-message");
      const msg = $txtmessage.value;
      toast(msg); // Llama a la función toast con el mensaje
      notificarNivelDeAguaBajo(); // Llama a la función para verificar y mostrar el nivel de agua
    });

    document.addEventListener("DOMContentLoaded", () => {
      const mensajeInicial = "¡Bienvenido a la página de notificaciones!";
      toast(mensajeInicial);

      // Solicitar permiso para las notificaciones
      if ('Notification' in window) {
        Notification.requestPermission().then(function (permission) {
          if (permission === 'granted') {
            // Iniciar un intervalo para mostrar notificaciones cada 10 segundos
            setInterval(() => {
              const nivelDeAgua = obtenerNivelDeAgua(); // Obtén el nivel de agua simulado
              const msg = `Nivel de agua: ${nivelDeAgua.toFixed(5)}`;

              // Mostrar la notificación push automáticamente
              const notification = new Notification('Notificación Push', {
                body: msg,
                icon: '../images/logo.png', // Ruta de tu icono
              });
            }, 300000); // Intervalo de 5 minutos (300,000 milisegundos)
          }
        });
      }
    });


    // Llamar a notificarNivelDeAguaBajo cada 5 minutos (300,000 milisegundos)
    setInterval(notificarNivelDeAguaBajo, 300000);
  </script>
  </script>
  <script src="/js/main.js"></script>
  <script src="/js/agua.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
</body>

</html>