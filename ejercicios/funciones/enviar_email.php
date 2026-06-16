<?php

function enviarEmail(string $desde, array $destinatarios, string $asunto, string $mensaje): void
{
    echo 'Preparando el envío del correo' . '<br>';
    echo 'Desde: ' . $desde . '<br>';

    foreach ($destinatarios as $destinatario) {
        echo 'Destinatario: ' . $destinatario . '<br>';
    }

    echo 'Asunto: ' . $asunto . '<br>';
    echo 'Mensaje: ' . $mensaje . '<br>' . '<br>';
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
