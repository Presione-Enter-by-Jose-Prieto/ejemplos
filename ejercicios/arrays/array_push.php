<?php

$ciudades = ['Medellin', 'Bogota'];

echo 'Antes de insertar:' . PHP_EOL;
foreach ($ciudades as $ciudad) {
    echo $ciudad . PHP_EOL;
}

array_push($ciudades, 'Cali', 'Barranquilla');

echo PHP_EOL . 'Después de insertar:' . PHP_EOL;
foreach ($ciudades as $ciudad) {
    echo $ciudad . PHP_EOL;
}
