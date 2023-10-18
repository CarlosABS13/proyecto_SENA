<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function obtenerNivelDeAgua() {
    return rand(0, 100); // Simula el nivel de agua (puedes usar tu lógica real aquí)
}

while (true) {
    $nivelAgua = obtenerNivelDeAgua();
    echo "data: " . json_encode(['nivelAgua' => $nivelAgua]) . "\n\n";
    flush(); // Enviar los datos al cliente
    sleep(10); // Actualizar cada 10 segundos (ajusta este valor según tus necesidades)
}
?>
