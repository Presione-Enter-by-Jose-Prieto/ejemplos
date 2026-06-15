<?php

$pais = 'Colombia';
$departamento = 'Antioquia';

if ($pais == 'Colombia') {
    if ($departamento == 'Antioquia') {
        echo 'Bienvenido a Antioquia, Colombia' . PHP_EOL;
    } else {
        echo 'Bienvenido a Colombia, visita Antioquia' . PHP_EOL;
    }
} else {
    echo 'Eres extranjero, visita ' . $pais . PHP_EOL;
}
