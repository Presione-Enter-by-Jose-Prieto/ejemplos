<?php

// Ejercicio 1:

$numero = 5;
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es $factorial";

// Ejercicio 2:

$numero = 10;

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo "$i es un divisor de $numero<br>";
    }
}

// Ejercicio 3:

$numero = 28;
$contador = 0;

for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $contador += $i;
    }
}

if ($contador == $numero) {
    echo "$numero es un número perfecto<br>";
} else {
    echo "$numero no es un número perfecto<br>";
}

// Ejercicio 4:

$pisos = 5;
$oficinas = 6;

for ($piso = 1; $piso <= $pisos; $piso++) {
    for ($oficina = 1; $oficina <= $oficinas; $oficina++) {
        echo "Piso $piso, Oficina $oficina <br>";
    }
    echo "<br>";
}

// Ejercicio 5:

$palabra = "Programacion";

for ($i = strlen($palabra) - 1; $i >= 0; $i--) {
    echo $palabra[$i];
}

echo "<br>";

// Ejercicio 6:

$palabraInvertida = "";

for ($i = strlen($palabra) - 1; $i >= 0; $i--) {
    $palabraInvertida .= $palabra[$i];
}

if ($palabra == $palabraInvertida) {
    echo "La palabra $palabra es un palíndromo <br>";
} else {
    echo "La palabra $palabra no es un palíndromo <br>";
}

// Ejercicio 7:

$numero = 11;

for ($i = 0; $i < 25; $i++) {
    echo $numero . "<br>";
    $numero += 11;
}

// Ejercicio 8:

$contrasena = "Admin2026!";
$tiene_numero = false;
$longitud_minima = 8;

$largo = strlen($contrasena);

for ($i = 0; $i < $largo; $i++) {
    if (is_numeric($contrasena[$i])) {
        $tiene_numero = true;
    }
}

echo "<h3>Evaluación de Contraseña:</h3>";
if ($largo >= $longitud_minima && $tiene_numero) {
    echo "La contraseña es <b>SEGURA</b>.<br>";
} else {
    echo "La contraseña es <b>INSEGURA</b>. Debe tener al menos $longitud_minima caracteres y contener mínimo un número.<br>";
}
