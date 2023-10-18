<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/registro.css">
</head>

<body>
  <?php require('../php/header.php')?>

  <main class="container mt-5">
    <h1 class="mb-4">Formulario de Registro</h1>
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" value="" required>
        <div class="valid-feedback">
          ¡Se ve bien!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="validationCustom02" value="" required>
        <div class="valid-feedback">
          ¡Se ve bien!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Usuario</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
            required>
          <div class="invalid-feedback">
            Por favor ingrese un usuario.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
          required>
        <div class="invalid-feedback">
          Por favor ingrese una contraseña.
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Ciudad</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Escoger...</option>
          <option value="amazonas">Amazonas</option>
          <option value="antioquia">Antioquia</option>
          <option value="arauca">Arauca</option>
          <option value="atlantico">Atlántico</option>
          <option value="bogota">Bogotá D.C.</option>
          <option value="bolivar">Bolívar</option>
          <option value="boyaca">Boyacá</option>
          <option value="caldas">Caldas</option>
          <option value="caqueta">Caquetá</option>
          <option value="casanare">Casanare</option>
          <option value="cauca">Cauca</option>
          <option value="cesar">Cesar</option>
          <option value="choco">Chocó</option>
          <option value="cordoba">Córdoba</option>
          <option value="cundinamarca">Cundinamarca</option>
          <option value="guainia">Guainía</option>
          <option value="guaviare">Guaviare</option>
          <option value="huila">Huila</option>
          <option value="la_guajira">La Guajira</option>
          <option value="magdalena">Magdalena</option>
          <option value="meta">Meta</option>
          <option value="narino">Nariño</option>
          <option value="norte_de_santander">Norte de Santander</option>
          <option value="putumayo">Putumayo</option>
          <option value="quindio">Quindío</option>
          <option value="risaralda">Risaralda</option>
          <option value="san_andres_y_providencia">San Andrés y Providencia</option>
          <option value="santander">Santander</option>
          <option value="sucre">Sucre</option>
          <option value="tolima">Tolima</option>
          <option value="valle_del_cauca">Valle del Cauca</option>
          <option value="vaupes">Vaupés</option>
          <option value="vichada">Vichada</option>
        </select>
        <div class="invalid-feedback">
          Por favor seleccione una ciudad.
        </div>
      </div>
      <div class="col-12 mt-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Acepto los términos y condiciones
          </label>
          <div class="invalid-feedback">
            Debe aceptar los términos y condiciones antes de enviar.
          </div>
        </div>
      </div>
      <div class="col-12 mt-4">
        <button class="btn botonv btn-primary" type="submit" id="submitButton" disabled>Registrar</button>
      </div>
    </form>
  </main>

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