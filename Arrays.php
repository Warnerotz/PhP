<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombres = ["ana", "bernardo", "carmen"];

$nombres[5] = "pepe"; // se puede hacer esto en php el 3 y el 4 no existen si haces
//eso

var_dump($nombres); //funcion que hace de especie de debuguer.
print_r($nombres); //funcion que hace practicamente lo mismo que var_dump.

unset($nombres[1]); //funcion para borrar y liberar espacios del array
//puedes usar como clave tb palabras.
$nombres["padre"] = "juan";
$nombres["madre"] = "pepa";

//forma de rellenar un array con clave valor.
$datos = ["nombre" => "pepe", "edad" => 19];

//funcion si existe el elemento dni en el array datos muentra el dato sino mensaje
if (isset($datos["dni"])) {
    echo $datos["dni"];
} else {
    echo "no hay dni";
}

foreach ($nombres as $nombre) {
    echo "<li>$nombre";
}

//saca clave valor y si dentro de esa clave hay un array lo comprueba y la vuelve
//a mostrar.

foreach ($nombres as $clave => $nombre) {
    echo "<li>$clave";
    if (!is_array($dato)) {
        echo $dato;
    } else {
        foreach ($dato as $s) {
            echo $s . " ";
        }
    }
}
