<?php 

function enviarEmail($desde, $destinatarios, $asunto, $mensaje){
    echo "Preparando el envío del correo <br>";
    echo "Desde: " . $desde . "<br>";

    foreach ($destinatarios as $destinatario) {
        echo "Destinatario: " . $destinatario . "<br>";
    }

    echo "Asunto: " . $asunto . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
}

$destinatarios = array();
array_push($destinatarios, "jose.prieto@ejemplo.com", "maria.garcia@ejemplo.com");

$desde = "admin@ejemplo.com";
$asunto = "Asunto";
$mensaje = "Mensaje";

enviarEmail($desde, $destinatarios, $asunto, $mensaje);

echo "<br>";
$destinatarios = array("pedro.lopez@ejemplo.com", "ana.martinez@ejemplo.com", "luis.sanchez@ejemplo.com");

enviarEmail("copasst@ejemplo.com", $destinatarios, "Pago", "Pago recibido.");
