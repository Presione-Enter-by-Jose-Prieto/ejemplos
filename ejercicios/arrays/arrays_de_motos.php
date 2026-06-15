<?php

$motos = [
    [
        'Nombre' => 'BMW S1000RR',
        'Stock' => 7,
        'Precio' => 80000000,
    ],
    [
        'Nombre' => 'Kawasaki Z650',
        'Stock' => 20,
        'Precio' => 22000000,
    ],
    [
        'Nombre' => 'Susuki DR650',
        'Stock' => 17,
        'Precio' => 25000000,
    ],
    [
        'Nombre' => 'Yamaha Tracer 900',
        'Stock' => 2,
        'Precio' => 49000000,
    ],
];

echo 'Inventario de motos:' . PHP_EOL;

foreach ($motos as $moto) {
    echo $moto['Nombre'] . ' | Stock: ' . $moto['Stock'] . ' | Precio: ' . $moto['Precio'] . PHP_EOL;
}
