<?php

$array = ["a", "b", "letras" => "c", "d"];

echo "Array asociativo mixto:" . '<br>';
var_dump($array);

echo '<br>';

foreach ($array as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . '<br>';
}

$multidimensional = [
    [
        "Nombre" => "Diego Palacio",
        "Edad" => 22,
        "Genero" => "Masculino",
    ],
    [
        "Nombre" => "María González",
        "Edad" => 25,
        "Genero" => "Femenino",
    ],
    [
        "Nombre" => "Juan Pérez",
        "Edad" => 30,
        "Genero" => "Masculino",
    ],
];

echo '<br>' . "Array multidimensional de personas:" . '<br>';
var_dump($multidimensional);

echo '<br>' . "Nombres registrados:" . '<br>';
echo $multidimensional[0]["Nombre"] . '<br>';
echo $multidimensional[1]["Nombre"] . '<br>';
echo $multidimensional[2]["Nombre"] . '<br>';

$platos = [
    "Corleone" => [
        "Carnes" => "Res y pollo",
        "Precio" => [
            "Grande" => '$25.000',
            "Mediano" => '$15.000',
            "Pequeño" => '$10.000',
        ],
    ],
    "Batido Verde" => [
        "Frutas" => "Manzanas - Peras",
        "Precio" => [
            "Grande" => '$25.000',
            "Mediano" => '$15.000',
            "Pequeño" => '$10.000',
        ],
    ],
    "Milanesa" => [
        "Carnes" => "Pollo",
        "Precio" => [
            "Grande" => '$25.000',
            "Mediano" => '$15.000',
            "Pequeño" => '$10.000',
        ],
    ],
];

echo '<br>' . "Array multidimensional de platos:" . '<br>';
var_dump($platos);

echo '<br>' . "Consultas puntuales:" . '<br>';
echo $platos["Corleone"]["Carnes"] . '<br>';
echo $platos["Corleone"]["Precio"]["Grande"] . '<br>';
echo $platos["Batido Verde"]["Frutas"] . '<br>';
echo $platos["Batido Verde"]["Precio"]["Mediano"] . '<br>';
echo $platos["Milanesa"]["Carnes"] . '<br>';
echo $platos["Milanesa"]["Precio"]["Pequeño"] . '<br>';
