<?php

function suma(int $n1 = 0, int $n2 = 0) {
    $suma = $n1 + $n2;
    echo "El resultado es: " . $suma . "<br>";
}

suma();
suma(8,5);
suma(1);