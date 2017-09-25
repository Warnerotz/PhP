<?php

if (isset($_GET["tabla"])) {
    $tabla = $_GET["tabla"];
} else {
    header('location:index.php');
}


 
 $controlador=true;
 $resultado='';
if (isset($_GET["enviar"])) {
    if ($_GET["resp"]) {
        if (isset($_GET["mult"])) {
            $resultado = $_GET["tabla"] * $_GET["mult"];
            if ($resultado == $_GET["resp"]) {
                $controlador = true;
                $variableMensaje = "Respuesta correcta";
                $muliplicador = rand(1, 10);
                $respuesta = "";
            } else {
                $controlador=false;
                $variableMensaje = "respuesta incorrecta";
            }
        } else {
            echo "error";
        }
    } else {
        $error = "Introduce un numero";
    }
}else{
    $respuesta ="";
    $muliplicador = rand(1, 10);
    $variableMensaje ="";
}

    
    
    
    echo "<h3>Practica la tabla del $tabla</h3>";
    echo "<p>$tabla x $muliplicador = ";
    echo "<form>";
    echo "<input type='text' value=$respuesta name='resp'>";
    if (isset($error)) {
        echo "<span style='color:red'>$error</span><br>";
    }       
    echo "<input type='submit' name='enviar' value='Comprueba'>";
    if($controlador){
        echo "<h1>$variableMensaje</h1>";
        
    }else{
        echo "<h5>$variableMensaje</h5>";
    }
  
    
    echo "<input type='hidden'name='tabla' value='$tabla'>";
    echo "<input type='hidden'name='mult' value='$muliplicador'>";
    echo "</form>"
//printf("%d x %d = %d",$tabla,$i,$tabla*$i);
    ?>


