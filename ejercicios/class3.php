<?php

/*
    EJERCICIO 1
*/

echo "<h1>Ejercicio 1</h1>";

$cadena = "José Alejandro";
$float = 1.23;
const CONSTANTE = 3.792;
$primeros7digitosdepi = 3.1415926;
$primeros15digitosdeeuler = 2.718281828459045;

var_dump($cadena); echo "<br>";
var_dump($float); echo "<br>";
var_dump(CONSTANTE); echo "<br>";
var_dump($primeros7digitosdepi); echo "<br>";
var_dump($primeros15digitosdeeuler); echo "<br>";


/*
    EJERCICIO 2
*/


echo "<h1>Ejercicio 2</h1>";

$nombreEstudiante = "José Alejandro";
$var1 = 4.6;
$var2 = 2.5;
$var3 = 3.2;
$var4 = 4.9;
$var5 = 1.8;

// hecho como dijo la profe para que no me regañe :)
$promedio = ($var1 + $var2 + $var3 + $var4 + $var5) / 5;
echo "<p>Nombre del estudiante: " . $nombreEstudiante . "</p>";
echo "<p>Promedio de las notas: " . $promedio . "</p>";


// hecho a mi manera
$notas = array($var1, $var2, $var3, $var4, $var5);
$promedio = 0;
for ($i = 0; $i < 5; $i++) {
    $promedio += $notas[$i];
}
$promedio /= 5;

echo "<p>Nombre del estudiante: " . $nombreEstudiante . "</p>";
echo "<p>Promedio de las notas: " . $promedio . "</p>";


/*
    EJERCICIO 3
*/


echo "<h1>Ejercicio 3</h1>";

$var1 = 9;
$var2 = 7;

$suma = $var1 + $var2;
$resta = $var1 - $var2;
$multiplicacion = $var1 * $var2;
$division = $var1 / $var2;

echo "El resultado de " . $var1 . " + " . $var2 . " es: " . $suma;
echo "<br>";
echo "El resultado de " . $var1 . " - " . $var2 . " es: " . $resta;
echo "<br>";
echo "El resultado de " . $var1 . " * " . $var2 . " es: " . $multiplicacion;
echo "<br>";
echo "El resultado de " . $var1 . " / " . $var2 . " es: " . $division;



/*
    EJERCICIO 4
*/


echo "<h1>Ejercicio 4</h1>";

$estado = (5 == 2 ) || ( 2 > 1);

echo $estado;


/*
    EJERCICIO 5
*/


echo "<h1>Ejercicio 5</h1>";

$resultado = ((10 + 5) * 2 / 3) - (4 % 3) + (8 - 2) * 5 + (7 ** 2);

echo $resultado;


/*
    EJERCICIO 6
*/


echo "<h1>Ejercicio 6</h1>";

$ladoCuadrado = 8;
$areaCuadrado = $ladoCuadrado * $ladoCuadrado;
echo "El lado del cuadrado es: " . $ladoCuadrado;
echo "<br>";
echo "El área del cuadrado es: " . $areaCuadrado;
$perimetroCuadrado = 4 * $ladoCuadrado;
echo "<br>";
echo "El perímetro del cuadrado es: " . $perimetroCuadrado;

$baseTriangulo = 9;
$alturaTriangulo = 8;
$ladoUnoTriangulo = 8;
$ladoDosTriangulo = 8;

$areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;
echo "<br>";
echo "El área del triángulo es: " . $areaTriangulo;
$perimetroDelTriangulo = $ladoUnoTriangulo + $ladoDosTriangulo + $baseTriangulo;
echo "<br>";
echo "El perímetro del triángulo es: " . $perimetroDelTriangulo;


$baseRectangulo = 8;
$alturaRectangulo = 6;
$areaRectangulo = $baseRectangulo * $alturaRectangulo;
echo "<br>";
echo "El área del rectángulo es: " . $areaRectangulo;
$perimetroDelRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
echo "<br>";
echo "El perímetro del rectángulo es: " . $perimetroDelRectangulo;


$cadena1 = "Diego-Castro.5;28;41;08";
$buscar = array(";");
$x = str_replace($buscar,"",$cadena1);
$x = str_replace("-"," ",$x);
$x = str_replace("."," ",$x);
echo "<br>";
echo $x;
?>