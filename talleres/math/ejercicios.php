<?php

// Ejercicio 1:

$array = [];

for ($i = 0; $i < 10; $i++) {
    array_push($array, rand(0, 50));
}

foreach ($array as $value) {
    echo $value . " ";
}

echo "<br>";

echo max($array);

echo "<br>";

// Ejercicio 2:

$radio = 5;

$area = M_PI * $radio ** 2;

echo "El área un círculo con radio $radio es: " . $area;

// Ejercicio 3:
// Calcular los tres ángulos de un triángulo conociendo sus tres lados
// usando la Ley de Cosenos: cos(C) = (a² + b² - c²) / (2·a·b)

$a = 7;
$b = 10;
$c = 5;

$angA = rad2deg(acos(($b ** 2 + $c ** 2 - $a ** 2) / (2 * $b * $c)));
$angB = rad2deg(acos(($a ** 2 + $c ** 2 - $b ** 2) / (2 * $a * $c)));
$angC = 180 - $angA - $angB;

echo "<br>";
echo "Triángulo de lados a=$a, b=$b, c=$c <br>";
echo "Ángulo A (opuesto a 'a'): " . round($angA, 2) . "° <br>";
echo "Ángulo B (opuesto a 'b'): " . round($angB, 2) . "° <br>";
echo "Ángulo C (opuesto a 'c'): " . round($angC, 2) . "° <br>";
echo "Suma de ángulos: " . round($angA + $angB + $angC, 2) . "°";

// Ejercicio 4:

$catetoA = 5;
$catetoB = 6;
$hipotenusa = sqrt($catetoA ** 2 + $catetoB ** 2);

echo "<br>";
echo "Hipotenusa: " . round($hipotenusa, 2);
