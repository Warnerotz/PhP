<?php

if (isset($_GET["tabla"])) {
    $multiplicador = $_GET["tabla"];
} else {
    die("ejecucion incorrecta");
}

if (isset($_GET["mult"])) {
    $multiplicando = $_GET["mult"];
} else {
    die("ejecucion incorrecta");
}

if (isset($_GET["resp"])) {
    $respuesta = $_GET["resp"];
} else {
    die("ejecucion incorrecta");
}

if($multiplicador*$multiplicando==$respuesta){
    echo "<h1>La respuesta es correcta</h1>";
    
}else{
    echo "<h1>La respuesta es incorrecta</h1>";
    echo "<h3>La respuesta correcta era ".$multiplicador*$multiplicando."</h3>";
    
}

echo "<a href='practica.php'>Volver a practicar</a>"

?>