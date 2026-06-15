<?php

$var1 = 10;
$var2 = 80;
$operacion = '+';

switch ($operacion) {
    case '+':
        echo $var1 + $var2 . PHP_EOL;
        break;
    case '-':
        echo $var1 - $var2 . PHP_EOL;
        break;
    case '*':
        echo $var1 * $var2 . PHP_EOL;
        break;
    case '/':
        if ($var2 != 0) {
            echo $var1 / $var2 . PHP_EOL;
        } else {
            echo 'Error: división por cero.' . PHP_EOL;
        }
        break;
    default:
        echo 'Operación no válida.' . PHP_EOL;
}
