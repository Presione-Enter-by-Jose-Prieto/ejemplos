<?php

// Eliminar elementos del final del array con array_pop

$ciudades = array("Medellin", "Bogota", "Barranquilla");

echo "El último elemento es: " . array_pop($ciudades) . "<br> ";

foreach($ciudades as $ciudad) {
    echo $ciudad . "<br>";
}

?>