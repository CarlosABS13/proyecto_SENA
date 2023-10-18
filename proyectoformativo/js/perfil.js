document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
    
    // Obtén los valores de usuario y contraseña desde el formulario
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    // Realiza la lógica de autenticación aquí (compara con la base de datos, etc.)
    // Si la autenticación es exitosa, redirecciona al usuario a la página de inicio.
    if (username === "usuario_correcto" && password === "contraseña_correcta") {
        window.location.href = "/php/header.php"; // Cambia esto con la URL de tu página de inicio
    } else {
        alert("Usuario o contraseña incorrectos. Inténtalo de nuevo.");
    }
});
