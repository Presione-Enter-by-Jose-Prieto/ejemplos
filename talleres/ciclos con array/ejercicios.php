<?php

// Ejercicio 1:

$array = [];

for ($i = 0; $i < 10; $i++) {
    echo $i * 2 . " es número par. <br>";
    array_push($array, $i * 2);
}

foreach ($array as $element) {
    echo $element . " ";
}

echo "<br> <br>";

// Ejercicio 2:

$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";

foreach ($arrayName as $indice => $valor) {
    echo "Índice: $indice - Valor: $valor<br>";
}

// Ejercicio 3:

$arrayAsociativo = [
    "nombre" => "Juan Orozco",
    "direccion" => "Crra 48 A #22",
    "telefono" => "3215489621",
];

// Ejercicio 4:

$arrayUno = [];
$arrayDos = [];
$arrayTres = [];

while (count($arrayUno) < 5) {
    $numero = rand(0, 100);
    if ($numero % 2 == 0) {
        array_push($arrayUno, $numero);
    }
}

while (count($arrayDos) < 5) {
    $numero = rand(0, 50);
    if ($numero % 2 !== 0) {
        array_push($arrayDos, $numero);
    }
}

foreach ($arrayUno as $iterador) {
    echo $iterador . "<br>";
}

echo "<br>";

foreach ($arrayDos as $iterador) {
    echo $iterador . "<br>";
}

for ($i = 0; $i < count($arrayUno); $i++) {
    $sum = $arrayUno[$i] + $arrayDos[$i];
    array_push($arrayTres, $sum);
}

echo "<br>";

foreach ($arrayTres as $element) {
    echo $element . "<br>";
}

// Ejercicio 5:

$numeros = [12, 45, 7, 30, 50, 18, 3];

$mayor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
}

echo "El número mayor es: " . $mayor;

// Ejercicio 6:
