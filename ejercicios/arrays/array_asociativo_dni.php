<?php

$dni = [
    'Alejandro' => 1090411453,
    'Camila' => 1090411454,
    'María' => 1090411455,
];

echo $dni['Alejandro'] . PHP_EOL;
echo $dni['Camila'] . PHP_EOL;
echo $dni['María'] . PHP_EOL;

echo PHP_EOL . 'Recorrido completo del array asociativo:' . PHP_EOL;

foreach ($dni as $nombre => $numero) {
    echo $nombre . ': ' . $numero . PHP_EOL;
}
