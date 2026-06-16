<?php

$nombre = 'José Alejandro Prieto Salcedo';
$correo = 'jose.prieto@example.com';

function ejercicio2(): void
{
    global $nombre, $correo;
    echo 'Hola, mi nombre es ' . $nombre . '<br>';
    echo 'Mi correo electrónico es ' . $correo . '<br>';
}

ejercicio2();
