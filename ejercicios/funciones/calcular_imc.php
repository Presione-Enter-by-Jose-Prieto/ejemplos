<?php

function calcularIMC(float $peso = 0, float $altura = 1): float
{
    return $peso / ($altura * $altura);
}

echo 'El IMC es: ' . calcularIMC(70, 1.65) . PHP_EOL;
