<?php

// Ejercicio 1

$edad = 25;

if ($edad > 0 && $edad <= 5) {
    echo "Eres un infante";
} elseif ($edad > 5 && $edad <= 10) {
    echo "Eres un niño";
} elseif ($edad > 10 && $edad <= 15) {
    echo "Eres un preadolescente";
} elseif ($edad > 15 && $edad <= 18) {
    echo "Eres un adolescente";
} elseif ($edad > 18 && $edad <= 25) {
    echo "Eres un preadulto";
} elseif ($edad > 25 && $edad <= 40) {
    echo "Eres un adulto";
} elseif ($edad > 40 && $edad <= 55) {
    echo "Eres un preanciano";
} elseif ($edad > 55) {
    echo "Eres un anciano";
}
