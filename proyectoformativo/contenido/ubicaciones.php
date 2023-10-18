<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubicaciones</title>
  <link rel="stylesheet" href="/css/ubicaciones.css">
</head>

<body>
  <?php include('../php/header.php')?>

  <main class="container">
    <h4 class="text-center ubi m-3 mt-5">Ubicaciones</h4>
    <div class="row">
      <!-- card1 -->
      <div class="card text-center m-3" style="width: 15rem;">
        <div class="card-header bg-transparent border-success">
          <h5 class="card-title">Dispositivo</h5>
        </div>
        <div class="card-body">
          <img src="/images/arduino.png" class="card-img-top w-50 h-50" alt="...">
        </div>
        <div class="card-footer bg-transparent border-success">
          <!-- Aquí agregamos un botón para abrir la ventana modal -->
          <button type="button" class="btn plantilla text-center m-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Ubicacion
          </button>

          <!-- La ventana modal -->
          <div id="exampleModal" class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ubicación</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <!-- El formulario está dentro de la ventana modal -->
                  <form action="/contenido/ubicacion.php" method="post">
                    <input type="number" name="Longitud" placeholder="Longitud" required>
                    <input type="number" name="Latitud" placeholder="Latitud" required>
                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="guardarCambios">Guardar
                    cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- card1 -->

      <!-- card2 -->
      <div class="card text-center m-3" style="width: 15rem;">
        <div class="card-header bg-transparent border-success">
          <h5 class="card-title">Dispositivo</h5>
        </div>
        <div class="card-body">
          <img src="/images/arduino.png" class="card-img-top w-50 h-50" alt="...">
        </div>
        <div class="card-footer bg-transparent border-success">
          <!-- Aquí agregamos un botón para abrir la ventana modal -->
          <button type="button" class="btn plantilla text-center m-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Ubicacion
          </button>

          <!-- La ventana modal -->
          <div id="exampleModal" class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ubicación</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <!-- El formulario está dentro de la ventana modal -->
                  <form action="/contenido/ubicacion.php" method="post">
                    <input type="number" name="Longitud" placeholder="Longitud" required>
                    <input type="number" name="Latitud" placeholder="Latitud" required>
                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="guardarCambios">Guardar
                    cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- card2 -->

      <!-- card3 -->
      <div class="card text-center m-3" style="width: 15rem;">
        <div class="card-header bg-transparent border-success">
          <h5 class="card-title">Dispositivo</h5>
        </div>
        <div class="card-body">
          <img src="/images/arduino.png" class="card-img-top w-50 h-50" alt="...">
        </div>
        <div class="card-footer bg-transparent border-success">
          <!-- Aquí agregamos un botón para abrir la ventana modal -->
          <button type="button" class="btn plantilla text-center m-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Ubicacion
          </button>

          <!-- La ventana modal -->
          <div id="exampleModal" class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ubicación</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <!-- El formulario está dentro de la ventana modal -->
                  <form action="/contenido/ubicacion.php" method="post">
                    <input type="number" name="Longitud" placeholder="Longitud" required>
                    <input type="number" name="Latitud" placeholder="Latitud" required>
                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="guardarCambios">Guardar
                    cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- card3 -->

      <!-- card4 -->
      <div class="card text-center m-3" style="width: 15rem;">
        <div class="card-header bg-transparent border-success">
          <h5 class="card-title">Dispositivo</h5>
        </div>
        <div class="card-body">
          <img src="/images/arduino.png" class="card-img-top w-50 h-50" alt="...">
        </div>
        <div class="card-footer bg-transparent border-success">
          <!-- Aquí agregamos un botón para abrir la ventana modal -->
          <button type="button" class="btn plantilla text-center m-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Ubicacion
          </button>

          <!-- La ventana modal -->
          <div id="exampleModal" class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ubicación</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <!-- El formulario está dentro de la ventana modal -->
                  <form action="/contenido/ubicacion.php" method="post">
                    <input type="number" name="Longitud" placeholder="Longitud" required>
                    <input type="number" name="Latitud" placeholder="Latitud" required>
                  </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="guardarCambios">Guardar
                    cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- card4 -->
    </div>
  </main>

  <script>
    // JavaScript para llenar el formulario antes de abrir la ventana modal
    document.querySelector('.card-footer .btn').addEventListener('click', function () {
      // Aquí puedes llenar el formulario con valores predefinidos
      document.querySelector('input[name="Longitud"]').value = 'Valor Longitud';
      document.querySelector('input[name="Latitud"]').value = 'Valor Latitud';
    });

    // Función para validar y redirigir
    document.getElementById('guardarCambios').addEventListener('click', function () {
      // Validar el formulario
      var longitud = document.querySelector('input[name="Longitud"]').value;
      var latitud = document.querySelector('input[name="Latitud"]').value;

      if (longitud === '' || latitud === '') {
        alert('Por favor, complete todos los campos del formulario.');
        return; // No redirigir si el formulario no está completo
      }

      // Redirigir solo si el formulario está completo y válido
      window.location.href = '/contenido/ubicacion.php';
    });
  </script>


  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>