<?php

$ciudades = ['Medellin', 'Bogota', 'Barranquilla'];

$ultimoElemento = array_pop($ciudades);

echo 'El último elemento era: ' . $ultimoElemento . PHP_EOL;
echo 'Contenido restante del array:' . PHP_EOL;

foreach ($ciudades as $ciudad) {
    echo $ciudad . PHP_EOL;
}
