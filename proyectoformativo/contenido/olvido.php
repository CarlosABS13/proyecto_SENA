<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olvido de contraseña</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/olvido.css">
</head>

<body>
  <?php require('../php/header.php') ?>

  <main class="container mt-5">
    <div class="inicio_sesion">
      <div class="text-center">
        <img src="../images/logo.png" class="logo1 m-3" alt="">
      </div>
      <div class="card mx-auto" style="max-width: 18rem;">
        <div class="card-body text-center">
          <h3 class="card-title">Olvido de Contraseña</h3>
          <p class="text-muted">A veces sucede, no te preocupes. Le enviaremos un correo electrónico
            con el enlace para restablecer la contraseña.</p>
          <form>
            <label for="validationCustomUsername" class="col-sm-2 col-form-label">Email</label>
            <div class="mb-3 row align-items-center">
              <div class="col-sm-12">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Por favor ingrese su email.
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success fw-bold mt-3">Restablecer Contraseña</button>
          </form>
          <a href="../contenido/inicio_sesion.php" class="text-decoration-none">
            <p class="mt-3 text-decoration-none text-dark">Volver al inicio de sesión.</p>
          </a>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>