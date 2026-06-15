<?php

$x = 5;
$edad = 18;
$altura = 141;

function pruebaIncorrecta(): void
{
    if (isset($x)) {
        echo 'La variable global dentro de la función es: ' . $x . PHP_EOL;
        return;
    }

    echo 'Sin usar global, la variable $x no está disponible dentro de la función.' . PHP_EOL;
}

function pruebaCorrecta(): void
{
    global $x;
    echo 'La variable global dentro de la función es: ' . $x . PHP_EOL;
}

function pruebaReescritura(): void
{
    global $edad;
    $edad = 20;
    echo 'La variable global dentro de la función es: ' . $edad . PHP_EOL;
}

function pruebaAltura(): void
{
    $GLOBALS['altura'] = 150;
    echo 'La variable global dentro de la función es: ' . $GLOBALS['altura'] . PHP_EOL;
}

function variableStatic(): void
{
    static $contador = 0;
    echo $contador . PHP_EOL;
    $contador++;
}

echo 'Funciones en PHP' . PHP_EOL . PHP_EOL;
pruebaIncorrecta();
pruebaCorrecta();
pruebaReescritura();
echo 'La variable global fuera de la función es: ' . $edad . PHP_EOL;
pruebaAltura();
echo 'La variable global fuera de la función es: ' . $altura . PHP_EOL;
echo 'Ejecución 1: ';
variableStatic();
echo 'Ejecución 2: ';
variableStatic();
echo 'Ejecución 3: ';
variableStatic();
