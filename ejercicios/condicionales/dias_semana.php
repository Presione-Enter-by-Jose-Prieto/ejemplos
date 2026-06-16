<?php

$dia = 'Martes';
$noLaborable = ['sábado', 'sabado', 'domingo'];

$resultadoConArray = in_array(strtolower($dia), $noLaborable, true)
    ? $dia . ' es día no laborable.'
    : $dia . ' es día laboral.';

echo 'Evaluación con in_array:' . '<br>';
echo $resultadoConArray . '<br>' . '<br>';

echo 'Evaluación con switch:' . '<br>';

switch (strtolower($dia)) {
    case 'lunes':
    case 'martes':
    case 'miércoles':
    case 'miercoles':
    case 'jueves':
    case 'viernes':
        echo $dia . ' es día laboral.' . '<br>';
        break;
    case 'sábado':
    case 'sabado':
    case 'domingo':
        echo $dia . ' es día no laborable.' . '<br>';
        break;
    default:
        echo 'No se reconoce el día: ' . $dia . '<br>';
        break;
}
