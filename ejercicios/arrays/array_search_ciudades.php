<?php

$ciudades = ['Medellin', 'Bogota', 'Cali', 'Barranquilla'];

echo 'Posición de Cali: ' . array_search('Cali', $ciudades, true) . PHP_EOL;
