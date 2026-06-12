<?php

/*
    Determinar el número de caracteres de la PALABRA y determinar 
    la posición de la letra dentro de la palabra.
*/

$palabra = "PALABRA";

echo "La palabra " . $palabra . " tiene " . strlen($palabra) . " caracteres. <br>";
echo "<br>";

for ($i = 0; $i < strlen($palabra); $i++) {
    echo "La letra " . $palabra[$i] . " está en la posición " . $i . ". <br>";
}