<?php

$ciudades = ['Medellin', 'Bogota', 'Barranquilla'];

$ultimoElemento = array_pop($ciudades);

echo 'El último elemento era: ' . $ultimoElemento . '<br>';
echo 'Contenido restante del array:' . '<br>';

foreach ($ciudades as $ciudad) {
    echo $ciudad . '<br>';
}
