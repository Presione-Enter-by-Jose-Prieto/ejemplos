<?php

$ciudades = ['Medellin', 'Bogota', 'Cali', 'Barranquilla'];

sort($ciudades);

echo 'Array ordenado:' . PHP_EOL;

foreach ($ciudades as $ciudad) {
    echo $ciudad . PHP_EOL;
}
