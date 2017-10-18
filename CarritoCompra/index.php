<?php
require 'init.php';
?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <style type="text/css">
            #titulo{
                text-align: center;
                
            }
            #contenedor{
               text-align: center;
                
                
            }
            
        </style>
        
    </head>
    <body>
        <div id="titulo">
            <h1>Compra Online</h1>
        </div>
        <div id="contenedor">
            <form method="get" action="catalogo.php">
                <select name="cat">
                    <?php
                    foreach ($categorias as $codigo => $categoria) {
                        echo "<option value='$codigo'>$categoria</option>";
                    }
                    ?>
                </select>
                <input type="submit" name="Seguir" value="seguir">
            </form>
        </div>    
    </body>

</html>


