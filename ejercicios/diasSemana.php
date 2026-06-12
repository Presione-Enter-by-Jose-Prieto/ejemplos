<?php

// Forma compacta con in_array(valor, arrayDondeBuscar, Compara estricto === ) 
$dia = "Martes";
$noLaborable = ["sábado", "sabado", "domingo"];
echo in_array(strtolower($dia), $noLaborable, true)
    ? "$dia es día no laborable."
    : "$dia es día laboral.";


switch (strtolower($dia)) {
    case "lunes":
    case "martes":
    case "miércoles":
    case "miercoles":
    case "jueves":
    case "viernes":
        echo "$dia es día laboral.";
        break;
    case "sábado":
    case "sabado":
    case "domingo":
        echo "$dia es día no laborable.";
        break;
    default:
        echo "No se reconoce el día: $dia.";
        break;
}