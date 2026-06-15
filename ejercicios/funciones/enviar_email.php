<?php

function enviarEmail(string $desde, array $destinatarios, string $asunto, string $mensaje): void
{
    echo 'Preparando el envío del correo' . PHP_EOL;
    echo 'Desde: ' . $desde . PHP_EOL;

    foreach ($destinatarios as $destinatario) {
        echo 'Destinatario: ' . $destinatario . PHP_EOL;
    }

    echo 'Asunto: ' . $asunto . PHP_EOL;
    echo 'Mensaje: ' . $mensaje . PHP_EOL . PHP_EOL;
}

$destinatarios = [];
array_push($destinatarios, 'jose.prieto@ejemplo.com', 'maria.garcia@ejemplo.com');

enviarEmail('admin@ejemplo.com', $destinatarios, 'Asunto', 'Mensaje');

$destinatarios = [
    'pedro.lopez@ejemplo.com',
    'ana.martinez@ejemplo.com',
    'luis.sanchez@ejemplo.com',
];

enviarEmail('copasst@ejemplo.com', $destinatarios, 'Pago', 'Pago recibido.');
