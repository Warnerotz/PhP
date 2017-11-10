<?php
require "MasterClass.php";
require 'init.php';
if(isset($_SESSION['master'])){
    
    session_destroy();
}
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">        
    </head>
    <body>
        <?php require 'header.php'?>
        <div id='empezar'>
            <form method="post" action="juego.php">                
                <input class="boton_personalizado"  type="submit" name='facil' value="Principiante"/><br>
                <input class="boton_personalizado"  type="submit" name='intermedio' value="intermedio"/><br>
                <input class="boton_personalizado"  type="submit" name='dificil' value="dificil"/> <br>
            </form>
        </div>
    </body>

</html>
