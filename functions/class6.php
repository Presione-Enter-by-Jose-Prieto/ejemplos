<?php

// Crear una función que calcule el indice de masa muscular,
// con parámetros predeterminados.

function calcularIMC(float $peso = 0, float $altura = 0) {
    return $peso / ($altura * $altura);
}

echo "El IMC es: " . calcularIMC(70 , 1.65);

