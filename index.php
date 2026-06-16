<?php

$directorioBase = __DIR__ . "/ejercicios";

echo "Proyecto reorganizado por temas<br><hr>";

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
                    echo "/ejercicios/" . $tema . "/" . $archivo . "<br>";
                }
            }

            echo "<br>";
        }
    }
}
