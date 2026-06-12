<?php
    $pais = "Colombia";
    $departamento = "Antioquia";

    if ($pais == "Colombia") {
        if ($departamento == "Antioquia") {
            echo "Bienvenido a Antioquia, Colombia";
        }else{
            echo "Bienvenido a Colombia, visita Antioquia";
        }
    }else{
        echo "Eres extranjero, visita $pais";
    }
?>