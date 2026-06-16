<?php

$ciudades = ['Medellin', 'Bogota'];

echo 'Antes de insertar:' . '<br>';
foreach ($ciudades as $ciudad) {
    echo $ciudad . '<br>';
}

array_push($ciudades, 'Cali', 'Barranquilla');

echo '<br>' . 'Después de insertar:' . '<br>';
foreach ($ciudades as $ciudad) {
    echo $ciudad . '<br>';
}
