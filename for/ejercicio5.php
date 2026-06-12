<?php

$palabra = "PEPITO";

$arrayLetras = str_split($palabra);

for ( $i = 0; $i < count($arrayLetras); $i++ ) {
    echo $arrayLetras[$i] . "<br>";
}


echo "<br>";


for ( $i = 0; $i < strlen($palabra); $i++ ) {
    echo $palabra[$i] . "<br>";
}