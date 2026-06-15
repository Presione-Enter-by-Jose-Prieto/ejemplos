<?php

for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

echo PHP_EOL;

for ($i = 20; $i >= 0; $i -= 2) {
    echo $i . PHP_EOL;
}
