<?php

echo "Ejercicio 1" . '<br>';

$cadena = "José Alejandro";
$float = 1.23;
const CONSTANTE = 3.792;
$primeros7DigitosDePi = 3.1415926;
$primeros15DigitosDeEuler = 2.718281828459045;

var_dump($cadena);
var_dump($float);
var_dump(CONSTANTE);
var_dump($primeros7DigitosDePi);
var_dump($primeros15DigitosDeEuler);

echo '<br>' . "Ejercicio 2" . '<br>';

$nombreEstudiante = "José Alejandro";
$nota1 = 4.6;
$nota2 = 2.5;
$nota3 = 3.2;
$nota4 = 4.9;
$nota5 = 1.8;

$promedioDirecto = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;
echo "Nombre del estudiante: " . $nombreEstudiante . '<br>';
echo "Promedio calculado directamente: " . $promedioDirecto . '<br>';

$notas = [$nota1, $nota2, $nota3, $nota4, $nota5];
$promedioConCiclo = 0;

for ($i = 0; $i < count($notas); $i++) {
    $promedioConCiclo += $notas[$i];
}

$promedioConCiclo /= count($notas);

echo "Promedio calculado con ciclo: " . $promedioConCiclo . '<br>';

echo '<br>' . "Ejercicio 3" . '<br>';

$valor1 = 9;
$valor2 = 7;

echo "Suma: " . ($valor1 + $valor2) . '<br>';
echo "Resta: " . ($valor1 - $valor2) . '<br>';
echo "Multiplicación: " . $valor1 * $valor2 . '<br>';
echo "División: " . $valor1 / $valor2 . '<br>';

echo '<br>' . "Ejercicio 4" . '<br>';

$estado = 5 == 2 || 2 > 1;
echo "Resultado lógico: " . ($estado ? "true" : "false") . '<br>';

echo '<br>' . "Ejercicio 5" . '<br>';

$resultado = ((10 + 5) * 2) / 3 - (4 % 3) + (8 - 2) * 5 + 7 ** 2;
echo "Resultado de la expresión: " . $resultado . '<br>';

echo '<br>' . "Ejercicio 6" . '<br>';

$ladoCuadrado = 8;
$areaCuadrado = $ladoCuadrado * $ladoCuadrado;
$perimetroCuadrado = 4 * $ladoCuadrado;

echo "Cuadrado -> lado: " .
    $ladoCuadrado .
    ", área: " .
    $areaCuadrado .
    ", perímetro: " .
    $perimetroCuadrado .
    '<br>';

$baseTriangulo = 9;
$alturaTriangulo = 8;
$ladoUnoTriangulo = 8;
$ladoDosTriangulo = 8;
$areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;
$perimetroTriangulo = $ladoUnoTriangulo + $ladoDosTriangulo + $baseTriangulo;

echo "Triángulo -> base: " .
    $baseTriangulo .
    ", altura: " .
    $alturaTriangulo .
    ", área: " .
    $areaTriangulo .
    ", perímetro: " .
    $perimetroTriangulo .
    '<br>';

$baseRectangulo = 8;
$alturaRectangulo = 6;
$areaRectangulo = $baseRectangulo * $alturaRectangulo;
$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);

echo "Rectángulo -> base: " .
    $baseRectangulo .
    ", altura: " .
    $alturaRectangulo .
    ", área: " .
    $areaRectangulo .
    ", perímetro: " .
    $perimetroRectangulo .
    '<br>';

$cadena1 = "Diego-Castro.5;28;41;08";
$textoLimpio = str_replace(";", "", $cadena1);
$textoLimpio = str_replace("-", " ", $textoLimpio);
$textoLimpio = str_replace(".", " ", $textoLimpio);

echo "Cadena transformada: " . $textoLimpio . '<br>';
