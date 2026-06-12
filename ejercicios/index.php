<?php
    $titulo = "Ejercicios en PHP";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1 class="title"><?php echo $titulo; ?></h1>
    <p class="description">Es un placer tenerte aquí. A continuación se presenta la lista de ejercicios:</p>
    <div class="exercise-list">
        <a href="ejercicio1.php">Ver ejercicio 1</a>
        <a href="ejercicio2.php">Ver ejercicio 2</a>
        <a href="ejercicio3.php">Ver ejercicio 3</a>
    </div>
    <nav>
        <a href="../index.php">Volver al índice global</a>
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
    .exercise-list {
        display: flex;
        justify-content: center;
        gap: 20px;
        align-items: center;
        width: 100%;
        margin: 50px 0 0 0;
    }
    nav {
        text-align: center;
        margin-top: 50px;
    }
</style>
