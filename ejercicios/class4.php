<?php

$var1 = 10;
$var2 = 80;
$opc = "";

switch ($opc)
{
case "+":
    echo $var1 + $var2;
    break;
case "-":
    echo $var1 - $var2;
    break;
case "*":
    echo $var1 * $var2;
    break;
case "/":
    if( $var2 != 0 )
    {
        echo $var1 / $var2;
    }
    else
    {
        echo "Error: División por cero.";
    }
    break;
default:
    echo "Operación no válida.";
}

