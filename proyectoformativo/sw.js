self.addEventListener('push', function(event) {
    const options = {
      body: event.data.text(),
      icon: 'cero.png', // Ruta de tu icono
    };
  
    event.waitUntil(
      self.registration.showNotification('Notificación', options)
    );
  });
  