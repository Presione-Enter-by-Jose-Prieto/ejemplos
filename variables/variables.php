<?php
    $titulo = "Variables y Constantes en PHP";
    const PI = 3.1416;
    const ESTUDIANTE = "José Alejandro Prieto Salcedo";
    define("PROFESOR", "Ing. Jennifer Yepez");
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
    <div class="exercise-list">
        <p>El valor de PI es: <?php echo PI; ?></p>
        <p>El nombre del estudiante es: <?php echo ESTUDIANTE; ?></p>
        <p>El nombre del profesor es: <?php echo PROFESOR; ?></p>
    </div>
    <nav>
        <a href="index.php">Volver al índice de variables</a>
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
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 50px 0 0 0;
    }
    p {
        margin: 0;
        padding: 0;
    }
    nav {
        text-align: center;
        margin-top: 50px;
    }
</style>
