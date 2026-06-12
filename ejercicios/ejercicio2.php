<?php

$nombre = "José Alejandro Prieto Salcedo";
$correo = "jose.prieto@example.com";

function ejercicio2(){
    global $nombre, $correo;
    echo "<p>Hola, mi nombre es " . $nombre . "</p>";
    echo "<p> Mi correo electrónico es " . $correo . "</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <h1 class="title">Ejercicio 2</h1>
    <p class="description">Mostrar el nombre y el correo electrónico con mensajes separados y personalizados</p>
    <div class="content">
        <?php ejercicio2(); ?>
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