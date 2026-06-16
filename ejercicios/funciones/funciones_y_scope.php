<?php

$x = 5;
$edad = 18;
$altura = 141;

function pruebaIncorrecta(): void
{
    if (isset($x)) {
        echo 'La variable global dentro de la función es: ' . $x . '<br>';
        return;
    }

    echo 'Sin usar global, la variable $x no está disponible dentro de la función.' . '<br>';
}

function pruebaCorrecta(): void
{
    global $x;
    echo 'La variable global dentro de la función es: ' . $x . '<br>';
}

function pruebaReescritura(): void
{
    global $edad;
    $edad = 20;
    echo 'La variable global dentro de la función es: ' . $edad . '<br>';
}

function pruebaAltura(): void
{
    $GLOBALS['altura'] = 150;
    echo 'La variable global dentro de la función es: ' . $GLOBALS['altura'] . '<br>';
}

function variableStatic(): void
{
    static $contador = 0;
    echo $contador . '<br>';
    $contador++;
}

echo 'Funciones en PHP' . '<br>' . '<br>';
pruebaIncorrecta();
pruebaCorrecta();
pruebaReescritura();
echo 'La variable global fuera de la función es: ' . $edad . '<br>';
pruebaAltura();
echo 'La variable global fuera de la función es: ' . $altura . '<br>';
echo 'Ejecución 1: ';
variableStatic();
echo 'Ejecución 2: ';
variableStatic();
echo 'Ejecución 3: ';
variableStatic();
