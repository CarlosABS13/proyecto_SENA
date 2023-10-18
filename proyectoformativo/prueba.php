<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $subscription = json_decode($data);
    // Aquí puedes guardar la suscripción en una base de datos o en memoria según tus necesidades
    echo 'Suscripción exitosa';
} else {
    http_response_code(405);
    echo 'Método no permitido';
}
