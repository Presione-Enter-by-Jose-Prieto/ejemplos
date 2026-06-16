<?php

$palabra = 'PEPITO';
$arrayLetras = str_split($palabra);

echo 'Recorrido con str_split:' . '<br>';
for ($i = 0; $i < count($arrayLetras); $i++) {
    echo $arrayLetras[$i] . '<br>';
}

echo '<br>' . 'Recorrido directo del string:' . '<br>';
for ($i = 0; $i < strlen($palabra); $i++) {
    echo $palabra[$i] . '<br>';
}
