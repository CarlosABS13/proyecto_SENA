<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajustes</title>
  <link rel="stylesheet" href="../css/ajustes.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <?php require('../php/header.php')?>

  <main class="container">
    <img src="../images/logo.png" class="logo1 m-5" alt="">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre de la empresa</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descripción (opcional)</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <h3>Logo</h3>
        <form>
          <div class="mb-3">
            <label for="logo" class="form-label">Seleccione una imagen</label>
            <input type="file" id="logo" name="logo" accept="image/png, image/jpeg, image/jpg, image/svg">
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>
  </main>



  <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>