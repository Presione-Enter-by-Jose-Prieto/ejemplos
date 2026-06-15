<?php

declare(strict_types=1);

function sumarNumeros(int $a, int $b): int
{
    return $a + $b;
}

$segundoValor = "5 days";
$enteroValidado = filter_var($segundoValor, FILTER_VALIDATE_INT);

if ($enteroValidado === false) {
    echo "Error de tipos: el segundo valor no es un entero válido." . PHP_EOL;
} else {
    echo sumarNumeros(5, $enteroValidado) . PHP_EOL;
}
