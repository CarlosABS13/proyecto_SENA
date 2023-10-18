// URL del servidor donde enviarás la solicitud para enviar notificaciones push
const serverUrl = 'http://localhost/mi-proyecto/prueba.php';

// Datos de la notificación
const notificationData = {
  title: 'Notificación Push',
  body: '¡Esta es una notificación push!',
};

// Botón para cerrar la notificación
const closeAction = {
  action: 'close',
  title: 'Cerrar',
};

// Evento para enviar la notificación push al servidor
document.getElementById('send-notification-button').addEventListener('click', function () {
  fetch(serverUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ data: notificationData }),
  })
    .then(function (response) {
      if (response.ok) {
        console.log('Notificación push enviada con éxito al servidor.');
      } else {
        console.error('Error al enviar la notificación push al servidor.');
      }
    })
    .catch(function (error) {
      console.error('Error al enviar la notificación push:', error);
    });
});
