<?php

/*
    Array Asociativo
*/

$dni = array("Alejandro" => 1090411453, 
             "Camila" => 1090411454, 
             "María" => 1090411455);

echo $dni["Alejandro"] . "<br>";
echo $dni["Camila"] . "<br>";
echo $dni["María"] . "<br>";

foreach($dni as $nombre => $numero) {
    echo $nombre . ": " . $numero . "<br>";
}
