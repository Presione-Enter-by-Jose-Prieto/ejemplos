<?php

function suma(int $n1 = 0, int $n2 = 0): void
{
    $resultado = $n1 + $n2;
    echo 'El resultado es: ' . $resultado . PHP_EOL;
}

suma();
suma(8, 5);
suma(1);
