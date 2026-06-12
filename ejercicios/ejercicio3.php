<?php

$n1 = 8;
$n2 = 3;
$n3 = 5;

function ejercicio3(){
    global $n1, $n2, $n3;
    $array = [$n1, $n2, $n3];

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            for ($k = 0; $k < count($array); $k++) {
                if ($i !== $j && $j !== $k && $i !== $k) {
                    echo "<p>" . $array[$i] . $array[$j] . $array[$k] . " - ";
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    <h1 class="title">Ejercicio 3</h1>
    <p class="description">Todas las convinaciones posibles de convinacion entre los 3 numeros</p>
    <div class="content">
        <?php ejercicio3(); ?>
    </div>
    <nav>
        <a href="index.php">Volver al índice de ejercicios</a>
    </nav>
</body>
</html>

<style>
    .title {
        color: black;
        font-weight: lighter;
        text-align: center;
        margin: 40px 0 0 0;
    }
    .description {
        color: black;
        font-weight: normal;
        text-align: center;
        margin: 0 0 0 0;
    }
    .content {
        margin: 50px 0 0 0;
        display:  flex;
        flex-direction: row;
        text-align: center;
        height: 100%;
        justify-content: center;
    }
    nav {
        text-align: center;
        margin-top: 50px;
    }
</style>