<?php

$ciudades = ['Madrid', 'Barcelona', 'Valencia', 'Sevilla'];
$x = 'Hola, mundo!';

echo 'Arrays básicos en PHP' . PHP_EOL;
var_dump($ciudades);
var_dump($x);

$x = null;
var_dump(boolval($x));

$x = -5;
echo 'Valor positivo de x: ' . (-$x) . PHP_EOL;

$x2 = 78;
$x2 += 7;
echo 'Resultado de x2 += 7: ' . $x2 . PHP_EOL;

$a = 78;
$b = 7;
$b += $a;
echo 'Resultado de b += a: ' . $b . PHP_EOL;
