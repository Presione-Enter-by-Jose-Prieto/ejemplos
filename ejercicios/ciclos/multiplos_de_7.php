<?php

$count = 0;

for ($i = 1; $i <= 1000; $i++) {
    if ($i % 7 == 0) {
        $count++;
    }
}

echo 'Hay ' . $count . ' múltiplos de 7 entre 1 y 1000.' . '<br>';
