<?php

$ciudades = ['Medellin', 'Bogota', 'Cali', 'Barranquilla'];

sort($ciudades);

echo 'Array ordenado:' . '<br>';

foreach ($ciudades as $ciudad) {
    echo $ciudad . '<br>';
}
