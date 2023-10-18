<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/clima.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg menu">
        <div class="container-fluid menu">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <a class="nav-link active" href="../php/header.php"><img src="../images/logo.png" class="logo"
                        alt=""></a>
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-row" href="../contenido/dispositivos.php"><img class="icono"
                                src="../images/dispositivos.png" alt="">
                            <p class="nombres">Dispositivos</p>
                        </a>
                    </li>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active d-flex flex-row" href="../contenido/notificaciones.php"><img class="icono"
                                src="../images/notificacion.png" alt="">
                            <p class="nombres">Notificaciones</p>
                            <span clas="notificacion-indicador"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-row" href="../contenido/ajustes.php"><img class="icono"
                                src="../images/ajuste.png" alt="">
                            <p class="nombres">Ajustes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-row" href="../contenido/cerrar_sesion.php">
                            <img class="icono" src="../images/usuario.png" alt="">
                            <p class="nombres">Perfil</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <script src="../js/code.jquery.com_jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <script>
        // Agrega un evento clic a todos los elementos del menú
        var menuItems = document.querySelectorAll(".navbar-nav a.nav-link");
        
        for (var i = 0; i < menuItems.length; i++) {
            menuItems[i].addEventListener("click", function() {
                // Cierra el menú hamburguesa
                document.querySelector(".navbar-toggler").click();
            });
        }
    </script>
</body>

</html>