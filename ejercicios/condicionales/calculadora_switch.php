<?php

$var1 = 10;
$var2 = 80;
$operacion = '+';

switch ($operacion) {
    case '+':
        echo $var1 + $var2 . '<br>';
        break;
    case '-':
        echo $var1 - $var2 . '<br>';
        break;
    case '*':
        echo $var1 * $var2 . '<br>';
        break;
    case '/':
        if ($var2 != 0) {
            echo $var1 / $var2 . '<br>';
        } else {
            echo 'Error: división por cero.' . '<br>';
        }
        break;
    default:
        echo 'Operación no válida.' . '<br>';
}
