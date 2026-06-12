<?php
    $nombre = "José Alejandro"; // Ingresa tu nombre.
    $genero = "M";  // Usa M si eres Hombre y F si es mujer.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre; ?></title>
</head>
<body>
    <h1 class="title">Hola, <?php echo $nombre; ?> bienvenid<?php if ($genero === "M") { echo "o"; } else { echo "a"; } ?></h1>
    <p class="description">Es un placer tenerte aquí. A continuación se presenta la lista de ejercicios:</p>
    <div class="exercise-list">
        <a href="variables/index.php">Ver variables</a>
        <a href="funciones/index.php">Ver funciones</a>
        <a href="ejercicios/index.php">Ver ejercicios</a>
        <a href="tiposdedatos/index.php">Ver tipos de datos</a>
    </div>
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
    .exercise-list {
        display: flex;
        justify-content: center;
        gap: 20px;
        align-items: center;
        width: 100%;
        margin: 50px 0 0 0;
    }
</style>
