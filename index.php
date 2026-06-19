<?php

$directorioBase = __DIR__ . "/apuntes";

echo "Proyecto reorganizado por temas" . "<br>" . "<hr>";

if (is_dir($directorioBase)) {
    foreach (scandir($directorioBase) as $tema) {
        if (
            $tema !== "." &&
            $tema !== ".." &&
            is_dir($directorioBase . "/" . $tema)
        ) {
            echo strtoupper($tema) . "<br>";

            foreach (scandir($directorioBase . "/" . $tema) as $archivo) {
                $rutaArchivo = $directorioBase . "/" . $tema . "/" . $archivo;

                if (
                    $archivo !== "." &&
                    $archivo !== ".." &&
                    is_file($rutaArchivo) &&
                    pathinfo($archivo, PATHINFO_EXTENSION) === "php"
                ) {
                    echo "/apuntes/" . $tema . "/" . $archivo . "<br>";
                }
            }

            echo "<br>";
        }
    }
}

echo "<hr> <br>";

$directorioTalleres = __DIR__ . "/talleres";

echo "Directorio Talleres" . "<br>" . "<hr>";

if (is_dir($directorioTalleres)) {
    foreach (scandir($directorioTalleres) as $tema) {
        if (
            $tema !== "." &&
            $tema !== ".." &&
            is_dir($directorioTalleres . "/" . $tema)
        ) {
            echo strtoupper($tema) . "<br>";

            foreach (scandir($directorioTalleres . "/" . $tema) as $archivo) {
                $rutaArchivo =
                    $directorioTalleres . "/" . $tema . "/" . $archivo;

                if (
                    $archivo !== "." &&
                    $archivo !== ".." &&
                    is_file($rutaArchivo) &&
                    pathinfo($archivo, PATHINFO_EXTENSION) === "php"
                ) {
                    echo "/apuntes/" . $tema . "/" . $archivo . "<br>";
                }
            }

            echo "<br>";
        }
    }
}
