<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dispositivos</title>
  <link rel="stylesheet" href="../css/dispositivos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include('../php/header.php')?>

  <div class="fondo">
    <!-- lado izquierdo -->
    <div class=" espacio">
      <details>
        <summary>
          <button>.</button>
        </summary>
        <img src="../images/ubicacion.png" alt="">
        <p>Mis ubicaciones</p>
        <div class="d-flex flex-row ">
          <img class="iconos m-0" src="../images/ubicacion.png" alt="">
          <a href="../contenido/ubicaciones.php" class="textos text-decoration-none">Ubicación</a>
          <img class="lupas m-0 ms-5" src="../images/lupa.png" alt="">
        </div>
        <div class="d-flex flex-row m-1 ms-5">
          <a href="../contenido/ubicaciones.php" class="textos text-decoration-none">Mis ubicaciones</a>
          <img class="lupas m-0 ms-5" src="../images/cero.png" alt="">
        </div>
        <div class="d-flex flex-row m-1 ms-5">
          <a href="../contenido/ubicaciones.php" class="textos text-decoration-none">Todas las ubicaciones</a>
          <img class="lupas m-0 ms-2" src="../images/cero.png" alt="">
        </div>
      </details>
    </div>
    <!-- lado derecho -->
    <div class="d-flex flex-row justify-content-between espacio">
      <h4>Mis dispositivos</h4>
      <div>
        <button class="nuevo" onclick="location.href='../contenido/nuevo_dispositivo.php'">+ Nuevo dispositivo</button>
      </div>
    </div>
    <div class="container-fluid">
      <div class="d-flex flex-column justify-content-center align-items-center m-5">
        <p class="text-center m-3 texto1">Comienza creando tú <br> primer plantilla</p>
        <p class="text-center m-3 texto2">La plantilla es un modelo digital de un objeto físico. <br>
          Se utiliza en la plataforma SENA como plantilla para <br>
          asignar a los dispositivos.</p>

        <div class="d-flex justify-content-center">

          <button type="button" class="btn plantilla text-center" data-bs-toggle="modal"
            data-bs-target="#exampleModal">+ Nuevo dispositivo
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo dispositivo</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>
                    Ingrese el código proporcionado con el dispositivo (generalmente se encuentra debajo del código
                    QR)
                  </p>
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Hardware</label>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Escoger...</option>
                        <option>Arduino</option>
                        <option>BBC Micro:bit</option>
                        <option>ESP32</option>
                        <option>ESP8266</option>
                        <option>Lantronix Fox 3</option>
                        <option>Microduino</option>
                        <option>Onion Omega</option>
                        <option>Particle</option>
                        <option>Pycom WiPy</option>
                        <option>Raspberry Pi</option>
                        <option>Seeed Wio Terminal</option>
                        <option>SparkFun Blynk Board</option>
                        <option>Teensy</option>
                        <option>TinyDuino</option>
                        <option>Other</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Conexión</label>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Escoger...</option>
                        <option>Ethernet</option>
                        <option>WiFi</option>
                        <option>Satélite</option>
                        <option>GSM</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Descripción</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Descripción"
                        minlength="4" maxlength="128"></textarea>
                    </div>
                    <button type="submit" class="btn botonv">Guardar cambios</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn botong" data-bs-dismiss="modal">Cancelar</button>
                  <button class="btn botonv" type="submit" data-bs-dismiss="modal"
                    onclick="location.href='../contenido/plantilla.php'">Ver plantilla</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>