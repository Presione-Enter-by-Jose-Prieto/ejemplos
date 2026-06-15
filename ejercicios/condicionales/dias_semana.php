<?php

$dia = 'Martes';
$noLaborable = ['sábado', 'sabado', 'domingo'];

$resultadoConArray = in_array(strtolower($dia), $noLaborable, true)
    ? $dia . ' es día no laborable.'
    : $dia . ' es día laboral.';

echo 'Evaluación con in_array:' . PHP_EOL;
echo $resultadoConArray . PHP_EOL . PHP_EOL;

echo 'Evaluación con switch:' . PHP_EOL;

switch (strtolower($dia)) {
    case 'lunes':
    case 'martes':
    case 'miércoles':
    case 'miercoles':
    case 'jueves':
    case 'viernes':
        echo $dia . ' es día laboral.' . PHP_EOL;
        break;
    case 'sábado':
    case 'sabado':
    case 'domingo':
        echo $dia . ' es día no laborable.' . PHP_EOL;
        break;
    default:
        echo 'No se reconoce el día: ' . $dia . PHP_EOL;
        break;
}
