<?php

$palabra = "PALABRA";

echo "La palabra " .
    $palabra .
    " tiene " .
    strlen($palabra) .
    " caracteres." .
    '<br>' .
    '<br>';

for ($i = 0; $i < strlen($palabra); $i++) {
    echo "La letra " .
        $palabra[$i] .
        " está en la posición " .
        $i .
        "." .
        '<br>';
}
