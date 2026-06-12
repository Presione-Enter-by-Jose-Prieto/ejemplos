<?php

$notaParcial = 5;
$notaPrueba = 3;

switch ( $notaParcial ){
    case 1:
    case 2:
    case 3:
        echo "El estudiante Rebrobo el Parcial<br>";
        switch ( $notaPrueba ){
            case 1:
            case 2:
                echo "El estudiante Rebrobo la Prueba<br>";
                break;
            case 3:
            case 4:
            case 5:
                echo "El estudiante Aprobo la Prueba<br>";
                break;
            default:
                echo "La nota de la prueba no es válida<br>";
        }
        break;
    case 4:
    case 5:
        echo "El estudiante Aprobo el Parcial<br>";
        switch ( $notaPrueba ){
            case 1:
            case 2:
                echo "El estudiante Rebrobo la Prueba<br>";
                break;
            case 3:
            case 4:
            case 5:
                echo "El estudiante Aprobo la Prueba<br>";
                break;
            default:
                echo "La nota de la prueba no es válida<br>";
        }
        break;
    default:
        echo "La nota del parcial no es válida<br>";
}