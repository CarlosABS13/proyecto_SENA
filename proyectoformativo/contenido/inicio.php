<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="../css/inicio_sesion.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    
    <body>
        
        <main>
    <div class="inicio_sesion">
      <img src="../images/logo.png" class="logo1 m-3" alt="">
      <div class="card" style="width: 18rem;">
        <div class="card-body text-center">
          <form action="/contenido/dispositivos.php" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
              <div id="emailHelp" class="form-text mt-3"><a href="../contenido/olvido.php"
                  class="text-decoration-none text-black">Olvido su contraseña?.</a></div>
              <div id="emailHelp" class="form-text mt-3"><a href="../contenido/registro.php"
                  class="text-decoration-none text-black">No tienes una cuenta? Registrate ya!.</a></div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            </div>
            <button type="submit" id="submitButton" disabled class="btn botonv">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </main>


  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    
    const formulario = document.querySelector(".needs-validation");
    const botonEnviar = document.getElementById("submitButton");

    formulario.addEventListener("input", function () {
      // Verifica si el formulario es válido
      const formularioValido = formulario.checkValidity();

      // Habilita o deshabilita el botón según el estado del formulario
      botonEnviar.disabled = !formularioValido;
    });
  </script>
</body>

</html>