const $toast = document.querySelectorAll(".toast")[0];
const $toastbody = $toast.getElementsByClassName("toast-body")[0];
const $nivelAgua = document.getElementById("nivel-agua");

const es = new EventSource("/ruta/a/agua_sse.php");

es.addEventListener("message", function(event) {
    const data = JSON.parse(event.data);
    const nivelAgua = data.nivelAgua.toFixed(5);
    const mensajeToast = data.mensajeToast;

    // Actualizar el toast
    if ($toastbody) {
        $toastbody.innerText = mensajeToast;
        const bootToast = new bootstrap.Toast($toast);
        bootToast.show();
    }

    // Actualizar el nivel de agua en la interfaz de usuario
    $nivelAgua.textContent = nivelAgua;
});
