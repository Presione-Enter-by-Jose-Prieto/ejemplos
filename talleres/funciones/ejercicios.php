<?php

// Ejercicio 1:

function sumaCincoNumeros($a, $b, $c, $d, $e)
{
    echo $a + $b + $c + $d + $e;
}

sumaCincoNumeros(1, 2, 3, 4, 5);

echo "<br>";

// Ejercicio 2:

function sumaCincoNumeros2($a, $b, $c, $d, $e)
{
    $temporal = $a + $b + $c + $d + $e;
    echo $temporal;
}

echo sumaCincoNumeros2(2, 5, 1, 8, 10);

echo "<br>";

// Ejercicio 3:

function volumenCilindro($radio, $altura)
{
    $volumen = M_PI * $radio ** 2 * $altura;
    echo "El volumen del cilindro es: " . $volumen;
}

volumenCilindro(5, 16);

echo "<br>";

// Ejercicio 4:

function determinarSiEsPar($numero)
{
    if ($numero % 2 == 0) {
        echo "El número $numero es par.";
    } else {
        echo "El número $numero es impar.";
    }
}

determinarSiEsPar(4);

echo "<br>";

// Ejercicio 5:

function incrementarEnUno($numero)
{
    echo $numero + 1 . "<br>";
}

incrementarEnUno(5);
incrementarEnUno(10);
incrementarEnUno(15);

// Ejercicio 6:

function nombreMes($mes)
{
    if ($mes > 12 || $mes < 1) {
        echo "Mes inválido";
        return;
    }

    $meses = [
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre",
    ];

    echo $meses[$mes];
}

nombreMes(6);

echo "<br>";

//Ejercicio 7:

function calcularIVA($totalProducto, $porcentajeIVA)
{
    $iva = ($totalProducto * $porcentajeIVA) / 100;
    echo "Para un producto de $" .
        $totalProducto .
        " el IVA es: $" .
        $iva .
        "<br>";
}
calcularIVA(100, 10);
