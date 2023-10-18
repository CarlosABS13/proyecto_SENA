// ... Código anterior ...

function obtenerNivelDeAgua() {
    // Simula un valor de nivel de agua entre 0 y 100
    return Math.random() * 100;
  }

  function notificarNivelDeAguaBajo() {
    // Obtén el nivel de agua simulado
    const nivelDeAgua = obtenerNivelDeAgua();
  
    // Si el nivel de agua es bajo, muestra una notificación
    if (nivelDeAgua < umbralMinimo) {
      mostrarNotificacion("El nivel de agua en el invernadero es bajo. ¡Rellena el depósito!");
    }
  }
  
  
  function mostrarNotificacion(mensaje) {
    if ('Notification' in window) {
      Notification.requestPermission().then(function (permission) {
        if (permission === 'granted') {
          const notification = new Notification('Notificación', {
            body: mensaje,
            icon: 'icon.png', // Ruta de tu icono
          });
        }
      });
    }
  }
  
  document.getElementById("btn-toast").addEventListener("click", () => {
    const $txtmessage = document.getElementById("txt-message");
    const msg = $txtmessage.value;
    toast(msg);
  });
  
  // ... Resto del código ...
  