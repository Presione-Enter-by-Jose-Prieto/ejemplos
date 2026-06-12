<?php
    $titulo = "Funciones en PHP";
    $x = 5; // variable global
    $edad = 18;
    $altura = 141;

    function pruebaIncorecta() {
        echo "La variable global dentro de la función es: " . $x;
    }

    function pruebaCorecta() {
        global $x; // acceder a la variable global
        echo "La variable global dentro de la función es: " . $x;
    }

    function pruebaReescritura() {
        global $edad;
        $edad = 20; // reescribir el valor de la variable global
        echo "La variable global dentro de la función es: " . $edad . "<br>";
    }

    function pruebaAltura() {
        $GLOBALS['altura'] = 150; // reescribir el valor de la variable global
        echo "La variable global dentro de la función es: " . $GLOBALS['altura'] . "<br>";
    }

    function variableStatic() {
        static $contador = 0; // static lo que hace es mantener el valor de la variable dentro de la funcion, normalmente luego de cada ejecución la funcion resetea los valores de todas las variables dentro de ella, execpto si dice static
        echo $contador . "<br>";
        $contador++;
    }
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
        <p><?php pruebaIncorecta(); ?></p>
        <p><?php pruebaCorecta(); ?></p>
        <p><?php pruebaReescritura(); echo "La variable global fuera de la función es: " . $edad; ?></p>
        <p><?php pruebaAltura(); echo "La variable global fuera de la función es: " . $altura; ?></p>
        <p><?php echo "ejecución 1: "; variableStatic(); echo "ejecución 2: "; variableStatic(); echo "ejecución 3: "; variableStatic(); ?></p>
    </div>
    <nav>
        <a href="index.php">Volver al índice de funciones</a>
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
    .exercise-list {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 30px 0 0 0;
    }
    nav {
        text-align: center;
        margin-top: 50px;
    }
</style>
