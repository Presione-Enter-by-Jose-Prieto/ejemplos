<?php

$pais = "Colombia";
$departamento = "Antioquia";

if ($pais == "Colombia") {
    if ($departamento == "Antioquia") {
        echo "Bienvenido a Antioquia, Colombia" . '<br>';
    } else {
        echo "Bienvenido a Colombia, visita Antioquia" . '<br>';
    }
} else {
    echo "Eres extranjero, visita " . $pais . '<br>';
}
