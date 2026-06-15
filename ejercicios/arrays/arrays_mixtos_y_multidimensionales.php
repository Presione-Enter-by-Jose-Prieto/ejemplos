<?php

$array = ['a', 'b', 'letras' => 'c', 'd'];

echo 'Array asociativo mixto:' . PHP_EOL;
var_dump($array);

echo PHP_EOL;

foreach ($array as $key => $value) {
    echo 'Key: ' . $key . ', Value: ' . $value . PHP_EOL;
}

$multidimensional = [
    [
        'Nombre' => 'Diego Palacio',
        'Edad' => 22,
        'Genero' => 'Masculino',
    ],
    [
        'Nombre' => 'María González',
        'Edad' => 25,
        'Genero' => 'Femenino',
    ],
    [
        'Nombre' => 'Juan Pérez',
        'Edad' => 30,
        'Genero' => 'Masculino',
    ],
];

echo PHP_EOL . 'Array multidimensional de personas:' . PHP_EOL;
var_dump($multidimensional);

echo PHP_EOL . 'Nombres registrados:' . PHP_EOL;
echo $multidimensional[0]['Nombre'] . PHP_EOL;
echo $multidimensional[1]['Nombre'] . PHP_EOL;
echo $multidimensional[2]['Nombre'] . PHP_EOL;

$platos = [
    'Corleone' => [
        'Carnes' => 'Res y pollo',
        'Precio' => [
            'Grande' => '$25.000',
            'Mediano' => '$15.000',
            'Pequeño' => '$10.000',
        ],
    ],
    'Batido Verde' => [
        'Frutas' => 'Manzanas - Peras',
        'Precio' => [
            'Grande' => '$25.000',
            'Mediano' => '$15.000',
            'Pequeño' => '$10.000',
        ],
    ],
    'Milanesa' => [
        'Carnes' => 'Pollo',
        'Precio' => [
            'Grande' => '$25.000',
            'Mediano' => '$15.000',
            'Pequeño' => '$10.000',
        ],
    ],
];

echo PHP_EOL . 'Array multidimensional de platos:' . PHP_EOL;
var_dump($platos);

echo PHP_EOL . 'Consultas puntuales:' . PHP_EOL;
echo $platos['Corleone']['Carnes'] . PHP_EOL;
echo $platos['Corleone']['Precio']['Grande'] . PHP_EOL;
echo $platos['Batido Verde']['Frutas'] . PHP_EOL;
echo $platos['Batido Verde']['Precio']['Mediano'] . PHP_EOL;
echo $platos['Milanesa']['Carnes'] . PHP_EOL;
echo $platos['Milanesa']['Precio']['Pequeño'] . PHP_EOL;
