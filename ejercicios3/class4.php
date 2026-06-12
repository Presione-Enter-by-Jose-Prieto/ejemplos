<?php

$ciudades = array("Medellin", "Bogota", "Cali", "Barranquilla");

//Ordena el array alfabeticamente de la A a la Z
sort($ciudades);

echo "Array ordenado: ";

foreach($ciudades as $ciudad) {
    echo $ciudad . " ";
}

?>