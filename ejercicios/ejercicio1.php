<?php

$nombre = "José Alejandro Prieto Salcedo";
$correo = "jose.prieto@example.com";

function ejercicio1(){
    global $nombre, $correo;
    echo $nombre . " - " . $correo;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <h1 class="title">Ejercicio 1</h1>
    <p class="description">Imprimir dos variables con un mismo echo</p>
    <div class="content">
        <?php ejercicio1(); ?>
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
        text-align: center;
    }
    nav {
        text-align: center;
        margin-top: 50px;
    }
</style>