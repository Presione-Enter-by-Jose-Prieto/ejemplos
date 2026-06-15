<?php

$palabra = 'PEPITO';
$arrayLetras = str_split($palabra);

echo 'Recorrido con str_split:' . PHP_EOL;
for ($i = 0; $i < count($arrayLetras); $i++) {
    echo $arrayLetras[$i] . PHP_EOL;
}

echo PHP_EOL . 'Recorrido directo del string:' . PHP_EOL;
for ($i = 0; $i < strlen($palabra); $i++) {
    echo $palabra[$i] . PHP_EOL;
}
