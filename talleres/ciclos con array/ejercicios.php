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
$arrayName = [];

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

echo "El número mayor es: " . $mayor . "<br><br>";

// Ejercicio 6:

$pesos = [72.5, 85.0, 60.3, 90.8, 55.4];

$sumaPesos = 0;

foreach ($pesos as $peso) {
    $sumaPesos += $peso;
}

$promedio = $sumaPesos / count($pesos);

$sobrePromedio = 0;
$bajoPromedio = 0;

foreach ($pesos as $peso) {
    if ($peso > $promedio) {
        $sobrePromedio++;
    } else {
        $bajoPromedio++;
    }
}

echo "Promedio de peso: " . $promedio . " kg<br>";
echo "Personas sobre el promedio: " . $sobrePromedio . "<br>";
echo "Personas bajo el promedio: " . $bajoPromedio . "<br>";

// Ejercicio 7:

$grupoA = [
    "José" => 5,
    "María" => 3.5,
    "Pedro" => 4.2,
    "Ana" => 4.8,
    "Luis" => 3.9,
    "Carlos" => 2.5,
    "Luisa" => 4.3,
    "Pepe" => 3.8,
    "Juan" => 4.1,
    "Pablo" => 1.7,
];

$grupoB = [
    "Sofía" => 3.7,
    "Andrés" => 2.1,
    "Valentina" => 4.5,
    "Miguel" => 1.8,
    "Isabella" => 3.3,
    "Sebastián" => 4.9,
    "Camila" => 2.6,
    "Diego" => 1.4,
    "Natalia" => 4.2,
    "Felipe" => 3.0,
];

$promedioGrupoA = array_sum($grupoA) / count($grupoA);
$promedioGrupoB = array_sum($grupoB) / count($grupoB);

echo "Promedio Grupo A: " . $promedioGrupoA . "<br>";
echo "Promedio Grupo B: " . $promedioGrupoB . "<br>";

$promedioTotal = ($promedioGrupoA + $promedioGrupoB) / 2;
echo "Promedio Total: " . $promedioTotal . "<br>";

if ($promedioGrupoA > $promedioGrupoB) {
    echo "El promedio del Grupo A es mayor que el Grupo B.<br>";
} else {
    echo "El promedio del Grupo B es mayor que el Grupo A.<br>";
}

// Ejercicio 8:

$palabra = "Colombia";
$arrayDeCaracteres = str_split($palabra);
echo "Array de caracteres: ";
print_r($arrayDeCaracteres);

// o

echo "<br>";

$arrayDeCaracteres2 = [];

for ($i = 0; $i < strlen($palabra); $i++) {
    array_push($arrayDeCaracteres2, $palabra[$i]);
}

foreach ($arrayDeCaracteres2 as $caracter) {
    echo $caracter . " ";
}
