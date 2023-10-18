// script.js
document.addEventListener("DOMContentLoaded", function () {
    const showNotificationsBtn = document.getElementById("show-notifications-btn");
    const notificationsContainer = document.getElementById("notifications-container");
  
    showNotificationsBtn.addEventListener("click", function () {
      // Verificamos si el navegador admite notificaciones web
      if ("Notification" in window) {
        // Solicitamos permiso al usuario para mostrar notificaciones
        Notification.requestPermission().then(function (permission) {
          if (permission === "granted") {
            // Creamos una notificación
            const notification = new Notification("Tienes una nueva notificación", {
              body: "Este es el cuerpo de la notificación.",
              icon: "../images/logo.png", // Reemplaza con la ruta de tu icono
            });
          }
        });
      } else {
        console.error("Este navegador no admite notificaciones web.");
      }
    });
  });
  
  
  