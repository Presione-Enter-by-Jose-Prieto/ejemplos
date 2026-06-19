<?php

// Ejercicio 1:
$numAleatorio = rand(1, 100);

if ($numAleatorio < 50) {
    echo "El número es menor que 50 <br>";
} else {
    echo "El número es mayor que 50 <br>";
}

// Ejercicio 2:

$horasNormales = 8;
$horasTrabajadas = 12;

if ($horasTrabajadas > $horasNormales) {
    echo "El trabajador tuvo, " .
        $horasTrabajadas -
        $horasNormales .
        " horas de trabajo extra. <br>";
} else {
    echo "El trabajador no tuvo horas extras.";
}

// Ejercicio 3:

$primerNumero = 50;
$segundoNumero = 2;

if ($primerNumero > $segundoNumero) {
    $potencia = $primerNumero ** $segundoNumero;
    echo $potencia . "<br>";
} else {
    $potencia = $segundoNumero ** $primerNumero;
    echo $potencia . "<br>";
}

// Ejercicio 4:

$potencia =
    $primerNumero > $segundoNumero
        ? $primerNumero ** $segundoNumero
        : $segundoNumero ** $primerNumero;

echo $potencia . "<br>";

// Ejercicio 5:

$numero = -5;

if ($numero < 0) {
    echo "El número es negativo. <br>";
} else {
    echo "El número no es negativo. <br>";
}

// Ejercicio 6:

$primerNumero = 50;
$segundoNumero = 5;

if ($primerNumero % $segundoNumero == 0) {
    echo $primerNumero . " es múltiplo de " . $segundoNumero . "<br>";
} else {
    echo $primerNumero . " no es múltiplo de " . $segundoNumero . "<br>";
}

// Ejercicio 7:

$nota = -5;

if ($nota < 6 && $nota >= 0) {
    echo "El estudiante reprobo con: " . $nota . "<br>";
} elseif ($nota > 6) {
    echo "El estudiante aprobo con: " . $nota . "<br>";
} else {
    echo "La nota del estudiante no es valida." . "<br>";
}
