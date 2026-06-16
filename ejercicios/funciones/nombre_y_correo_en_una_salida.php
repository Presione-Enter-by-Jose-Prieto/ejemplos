<?php

$nombre = 'José Alejandro Prieto Salcedo';
$correo = 'jose.prieto@example.com';

function ejercicio1(): void
{
    global $nombre, $correo;
    echo $nombre . ' - ' . $correo . '<br>';
}

ejercicio1();
