<?php
$titulo = "Strings";
$texto = "Medellín";

function contarCaracterString(){
    global $texto;
    var_dump($texto); // string(9) "Medellín"
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1 class="title"><?php echo $titulo; ?></h1>
    <p class="description">Los strings en PHP son secuencias de caracteres.</p>
    <div class="content">
        <p>La longitud del string es: <?php contarCaracterString(); ?></p>
    </div>
    <nav>
        <a href="index.php">Volver al índice de tipos de datos</a>
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
        text-align: center;
    }
    nav {
        text-align: center;
        margin-top: 50px;
    }
</style>