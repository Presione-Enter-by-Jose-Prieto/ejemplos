<?php

// Array Asociativo Mixto 

$array = array("a", "b", "letras" => "c", "d");
var_dump($array);
echo "<br>";

foreach( $array as $key => $value) {
    echo "Key: $key, Value: $value" . "<br>";
}

// Array Multidimencionales

$multidimensional = array(
    array(
        "Nombre" => "Diego Palacio",
        "Edad" => 22,
        "Genero" => "Masculino"
    ),
    array(
        "Nombre" => "María González",
        "Edad" => 25,
        "Genero" => "Femenino"
    ),
    array(
        "Nombre" => "Juan Pérez",
        "Edad" => 30,
        "Genero" => "Masculino"
    )
);

echo "<br> <br>";
var_dump($multidimensional);

echo "<br> <br>";
echo $multidimensional[0]["Nombre"] . "<br>";
echo $multidimensional[1]["Nombre"] . "<br>";
echo $multidimensional[2]["Nombre"] . "<br>";


$platos = array(
    "Corleone" => array(
        "Carnes" => "Res y pollo",
        "Precio" => array(
            "Grande" => "$25.000",
            "Mediano" => "$15.000",
            "Pequeño" => "$10.000"
        ),
    ),
    "Batido Verde" => array(
        "Frutas" => "Manzanas - Peras",
        "Precio" => array(
            "Grande" => "$25.000",
            "Mediano" => "$15.000",
            "Pequeño" => "$10.000"
        ),
    ),
    "Milanesa" => array(
        "Carnes" => "Pollo",
        "Precio" => array(
            "Grande" => "$25.000",
            "Mediano" => "$15.000",
            "Pequeño" => "$10.000"
        ),
    ),
);
echo "<br> <br>";
var_dump($platos);

echo "<br> <br>";
echo $platos["Corleone"]["Carnes"] . "<br>";
echo $platos["Corleone"]["Precio"]["Grande"] . "<br>";
echo $platos["Batido Verde"]["Frutas"] . "<br>";
echo $platos["Batido Verde"]["Precio"]["Mediano"] . "<br>";
echo $platos["Milanesa"]["Carnes"] . "<br>";
echo $platos["Milanesa"]["Precio"]["Pequeño"] . "<br>";