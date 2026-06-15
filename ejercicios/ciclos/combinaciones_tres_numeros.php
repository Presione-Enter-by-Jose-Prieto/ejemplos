<?php

$n1 = 8;
$n2 = 3;
$n3 = 5;

function generarCombinaciones(): array
{
    global $n1, $n2, $n3;

    $numeros = [$n1, $n2, $n3];
    $combinaciones = [];

    for ($i = 0; $i < count($numeros); $i++) {
        for ($j = 0; $j < count($numeros); $j++) {
            for ($k = 0; $k < count($numeros); $k++) {
                if ($i !== $j && $j !== $k && $i !== $k) {
                    $combinaciones[] = $numeros[$i] . $numeros[$j] . $numeros[$k];
                }
            }
        }
    }

    return $combinaciones;
}

echo 'Combinaciones posibles:' . PHP_EOL;
echo implode(' - ', generarCombinaciones()) . PHP_EOL;
