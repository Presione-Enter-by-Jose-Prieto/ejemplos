<?php

// Ejercicio 1:

$edad = 25;

if ($edad > 0 && $edad <= 5) {
    echo "Eres un infante";
} elseif ($edad > 5 && $edad <= 10) {
    echo "Eres un niño";
} elseif ($edad > 10 && $edad <= 15) {
    echo "Eres un preadolescente";
} elseif ($edad > 15 && $edad <= 18) {
    echo "Eres un adolescente";
} elseif ($edad > 18 && $edad <= 25) {
    echo "Eres un preadulto";
} elseif ($edad > 25 && $edad <= 40) {
    echo "Eres un adulto";
} elseif ($edad > 40 && $edad <= 55) {
    echo "Eres un preanciano";
} elseif ($edad > 55) {
    echo "Eres un anciano";
}

// Ejercicio 2:

$numero = 1234;

if (strlen($numero) > 4) {
    echo "El número supera las 4 cifras";
} else {
    echo "El número tiene " . strlen($numero) . " cifras";
}

// Ejercicio 3:

$numero1 = 10;
$numero2 = 20;
$numero3 = 30;

if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo "El número 1 es el mayor";
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "El número 2 es el mayor";
} else {
    echo "El número 3 es el mayor";
}

// Ejercicio 4:

$totalPreguntas = 10;
$respuestasCorrectas = 8;

$porcentaje = ($respuestasCorrectas / $totalPreguntas) * 100;

if ($porcentaje >= 90) {
    echo "Nivel máximo";
} elseif ($porcentaje >= 75) {
    echo "Nivel medio";
} elseif ($porcentaje >= 50) {
    echo "Nivel regular";
} else {
    echo "Fuera de nivel";
}