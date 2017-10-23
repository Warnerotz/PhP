<?php
require 'init.php';

?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">        
    </head>
    <body>
        
        <div id="contenedor">
                <?php require 'montaHeader.php';?>
            <div id='seleccion'>
                <h1>Elija una categoria</h1>
            
            <form method="get" action="catalogo.php">
                <select name="cat">                    
                    <?php
                    foreach ($categorias as $codigo => $categoria) {
                        echo "<option value='$codigo'>$categoria</option>";
                    }
                    ?>
                </select><br>
                <input class='boton_personalizado' type="submit" name="Seguir" value="seguir">
            </form>
                
            </div>    
            <div>
                <h2>Elementos destacados de hoy</h2>
            </div>
            <div id="destacados">
                <?php
                    foreach($articulos as $articulo){
                        
                        if($articulo['destacado']===true){
                            require 'montaje.php';
                        }
                        
                    }
                ?>
                
            </div>
            
        </div>    
    </body>

</html>


