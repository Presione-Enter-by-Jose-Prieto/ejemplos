<?php

function multiplicacion(int $n1 = 0, int $n2 = 0): int
{
    return $n1 * $n2;
}

echo '2 * 4 = ' . multiplicacion(2, 4) . PHP_EOL;
echo '5 * 3 = ' . multiplicacion(5, 3) . PHP_EOL;
echo '7 * 7 = ' . multiplicacion(7, 7) . PHP_EOL;
