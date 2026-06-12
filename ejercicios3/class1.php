<?php

$ciudades = array("Medellin", "Bogota");

echo "Antes de insertar: <br> ";

foreach($ciudades as $ciudad) {
    echo $ciudad . "<br>";
}

// Insertar elementos al final del array con array_push
array_push($ciudades, "Cali", "Barranquilla");

echo "<br> Después de insertar: <br> ";

foreach($ciudades as $ciudad) {
    echo $ciudad . "<br>";
}

?>