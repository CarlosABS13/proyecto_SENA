// Función para simular el nivel de agua entre 0 y 100
function obtenerNivelDeAgua() {
  return Math.random() * 100;
}

function notificarNivelDeAguaBajo() {
  // Obtén el nivel de agua simulado
  const nivelDeAgua = obtenerNivelDeAgua();

  // Actualiza el valor en la interfaz de usuario
  const $nivelAgua = document.getElementById("nivel-agua");
  $nivelAgua.textContent = nivelDeAgua.toFixed(5); // Puedes formatear el número según tus necesidades
}

// Llamar a notificarNivelDeAguaBajo cada 5 minutos (300,000 milisegundos)
setInterval(notificarNivelDeAguaBajo, 300000);
