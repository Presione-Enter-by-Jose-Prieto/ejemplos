<?php

$ciudades = ['Medellin', 'Bogota', 'Cali', 'Barranquilla'];
$posicion = array_search('Cali', $ciudades, true);

echo 'Este elemento se encuentra en la posición ' . $posicion . ' dentro del array de ciudades.' . '<br>';
