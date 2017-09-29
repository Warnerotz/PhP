<?php

$palabras = "camion coche camion coche moto camion moto moto coche camion bici camion coche coche camion";
$array_palabra = explode(" ",$palabras);

foreach($array_palabra as $palabra){
    var_dump($palabra);
    echo str_word_count($palabra, 0); 
    
}


//var_dump($array_cadena);
?>