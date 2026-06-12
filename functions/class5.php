<?php

declare(strict_types = 1);

function guardarTelefonos(string $numero = "0000000", array $telefonos = array())
{
 array_push($telefonos, $numero);   
 return $telefonos;
}

function mostrarTelefonos(array $telefonos = array()): void {
    foreach ($telefonos as $telefono) {
        echo $telefono . "<br>";
    }
}

$telefonos = [];

$telefonos = guardarTelefonos("123456789", $telefonos);
$telefonos = guardarTelefonos("987654321", $telefonos);
$telefonos = guardarTelefonos("555555555", $telefonos);
$telefonos = guardarTelefonos("111111111", $telefonos);
$telefonos = guardarTelefonos("222222222", $telefonos);
$telefonos = guardarTelefonos("333333333", $telefonos);

mostrarTelefonos($telefonos);
