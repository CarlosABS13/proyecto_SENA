// script.js
document.addEventListener("DOMContentLoaded", function () {
    // Obtener una referencia al elemento de la lista de notificaciones
    const notificationsList = document.getElementById("notifications-list");
  
    // Hacer una solicitud para cargar los datos de notificación (simulados desde el archivo JSON)
    fetch("notifications.json")
      .then((response) => response.json())
      .then((data) => {
        // Recorrer las notificaciones y agregarlas a la lista
        data.forEach((notification) => {
          const listItem = document.createElement("li");
          listItem.innerHTML = `
            <div class="notification-item">
              <div class="notification-message">${notification.message}</div>
              <div class="notification-timestamp">${new Date(notification.timestamp).toLocaleString()}</div>
            </div>
          `;
          notificationsList.appendChild(listItem);
        });
      })
      .catch((error) => {
        console.error("Error al cargar las notificaciones:", error);
      });
  });
  