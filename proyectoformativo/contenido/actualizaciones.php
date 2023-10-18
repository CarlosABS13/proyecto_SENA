<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizaciones</title>
  <link rel="stylesheet" href="../css/actualizaciones.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include('../php/header.php')?>

  <main class="container-fluid">

    <div class="d-flex flex-row">
      <h4 class="mt-4 ms-5 nueva">Nueva actualización</h4>
      <button type="button" class="btn fondo mt-3 ms-3"></button>
    </div>
    <!-- card2 -->
    <div class="m-5">
      <div class="card sombra d-flex align-items-center">
        <div class="card-body d-flex flex-row">
          <h5 class="card-title">Actualización</h5>
        </div>
        <div class="lineas mb-4" style="width: 18rem;">
          <div class="card-body d-flex flex-column align-items-center">
            <label for="logo" class="form-label subir"></label>
            <input type="file" id="logo" class="subir1" name="logo" accept=".bin, .tar, .mu, .zip, .gz, .bz2, .xz, .hs">
            <p class="card-text">Subir archivo de actualización (.bin, .tar, .mu, .zip, .gz, .bz2, .xz, .hs ).</p>
          </div>
        </div>
      </div>
    </div>
    <!-- card2 -->

    <!-- card3 -->
    <div class="m-5 ultima">
      <div class="card sombra">
        <form>
          <div class="card-body">
            <div class="mb-3">
              <h5 class="card-title">Revisar y comenzar</h5>
              <div class="row">
                <div class="col-12 col-lg-6">
                  <label for="exampleInputEmail1" class="form-label">Límite de intentos</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                </div>
                <div class="col-12 col-lg-6">
                  <label for="exampleInputEmail1" class="form-label">Intentos periodicos de restablecimiento</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Host</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" id="validationCustomUsername"
                      aria-describedby="inputGroupPrepend" required>
                  </div>
                  <div class="col-12 col-lg-6 mt-4">
                    <button type="submit" class="btn botonv ms-3 mt-2">Actualizar</button>
                    <button type="button" class="btn botonc ms-3 mt-2"
                      onclick="location.href='../contenido/dispositivos.php'">Cancelar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- card3 -->
  </main>


  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>