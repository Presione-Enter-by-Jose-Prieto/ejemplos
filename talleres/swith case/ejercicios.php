<?php

// Ejercicio 1:

$tipoMotor = 2;

switch ($tipoMotor) {
    case 0:
        echo "No hay establecido un valor definido para el tipo <br>";
        break;
    case 1:
        echo "Agua <br>";
        break;
    case 2:
        echo "Gasolina <br>";
        break;
    case 3:
        echo "Hormigón <br>";
        break;
    default:
        echo "No existe un valor válido <br>";
}

// Ejercicio 2:

$numero1 = 10;
$numero2 = 5;
$operador = '**';

switch ($operador) {
    case '+':
        echo $numero1 + $numero2 . "<br>";
        break;
    case '-':
        echo $numero1 - $numero2 . "<br>";
        break;
    case '*':
        echo $numero1 * $numero2 . "<br>";
        break;
    case '/':
        echo $numero1 / $numero2 . "<br>";
        break;
    case '%':
        echo $numero1 % $numero2 . "<br>";
        break;
    case '**':
        echo $numero1 ** $numero2 . "<br>";
        break;
    default:
        echo "Operador no válido <br>";
}

// Ejercicio 3:

$nacionalidad = "Colombiano";

switch ($nacionalidad) {
    case "Colombiano":
        echo "La nacionalidad es: $nacionalidad <br>";
        break;
    case "Italiano":
        echo "La nacionalidad es: $nacionalidad <br>";
        break;
    case "Argentino":
        echo "La nacionalidad es: $nacionalidad <br>";
        break;
    case "Alemán":
        echo "La nacionalidad es: $nacionalidad <br>";
        break;
    default:
        echo "Nacionalidad no especificada en la lista <br>";
}
