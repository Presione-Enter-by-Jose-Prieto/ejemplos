<?php

// Número aleatorio entre 1 y 10
$numeroRandom1 = rand(1, 10);
$numeroRandom2 = rand(1, 10);

echo "Número aleatorio 1: " . $numeroRandom1 . "<br>";
echo "Número aleatorio 2: " . $numeroRandom2 . "<br>";

// Número mayor
echo "Número mayor: " . max($numeroRandom1, $numeroRandom2) . "<br>";

// Número menor
echo "Número menor: " . min($numeroRandom1, $numeroRandom2) . "<br> <br>";

$numeros = [8, 6, 1, 7, 9, 5, 3, 8];
echo "Número mayor de la lista: " . max($numeros) . "<br> <br>";

// Potencia
echo "Potencia: " . pow(2, 5) . "<br> <br>";

// Raíz cuadrada
echo "Raíz cuadrada: " . sqrt(9) . "<br> <br>";

// pi
echo "pi: " . pi() . "<br> <br>";
