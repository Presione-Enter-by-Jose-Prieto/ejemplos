<?php

for ($i = 1; $i <= 50; $i++) {
    $numero = rand(1, 50);
    echo $numero . '<br>';

    if ($numero % 10 == 0) {
        echo "Se detiene el programa. El número " .
            $numero .
            " es múltiplo de 10." .
            '<br>';
        break;
    }
}
