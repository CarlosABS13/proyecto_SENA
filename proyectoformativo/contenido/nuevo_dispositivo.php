<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo dispositivo</title>
  <link rel="stylesheet" href="../css/nuevo_dispositivo.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include('../php/header.php')?>

  <main class="container-fluid">
    <a href="javascript:history.back()"><img src="../images/hacia-atras.png" alt="Botón" class="volver mt-2"> </a>
    <!-- texto -->
    <h2 class="mt-1 text-center nuevo">Nuevo dispositivo</h2>
    <p class="mt-1 text-center elije">Elige como agregar tu nuevo dispositivo</p>
    <!-- texto -->

    <!-- columnas -->
    <div class="row">

      <!-- columna1 -->
      <div class="col-12 col-lg-4 mt-2">
        <div class="card">
          <div class="card-body">
            <p class="titulos fs-2 text-center">
              Código QR
            </p>
            <div class="d-flex justify-content-center">

              <button type="button" class="btn codigo" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                          <label for="exampleInputEmail1" class="form-label">Código</label>
                          <input type="number" class="form-control" id="exampleInputPassword1"
                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- columna1 -->

      <!-- columna2 -->
      <div class="col-12 col-lg-4 mt-2">
        <div class="card">
          <div class="card-body">
            <p class="titulos fs-2 text-center">
              Manualmente
            </p>
            <div class="d-flex justify-content-center">

              <button type="button" class="btn teclado" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- columna2 -->

      <!-- columna3 -->
      <div class="col-12 col-lg-4 mt-2">
        <div class="card">
          <div class="card-body">
            <p class="titulos fs-2 text-center">
              Por plantilla
            </p>
            <div class="d-flex justify-content-center">

              <button type="button" class="btn bosquejo" data-bs-toggle="modal" data-bs-target="#exampleModal">
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- columna3 -->

    </div>
    <!-- columnas -->

    <!-- texto -->
    <div class="d-flex flex-row justify-content-center">
      <img src="../images/taconeador.png" class="tacon mt-3" alt="">
      <p class="mt-4 text-center escoge">Escoge algún método para ver las opciones</p>
    </div>
    <!-- texto -->

  </main>

  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>