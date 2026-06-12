<?php

/*
    Generar número aleatorios entre el 1 y el 50 y se detenga cuando salga un multiplo de 10
*/

for ($i = 1; $i <= 50; $i++) {
    $numero = rand(1, 50);
    echo $numero . "<br>";
    if ($numero % 10 == 0) {
        echo "Se detiene el programa. El número " . $numero . " es múltiplo de 10.<br>";
        break;
    }
}