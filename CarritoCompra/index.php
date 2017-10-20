<?php
require 'init.php';
?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <style type="text/css">
            a{
                text-decoration: none;
            }
            h2{
                margin-top: 150px;
                
            }
            .articulo{
              width: 300px;
                
            }
            #precio{
                font-size: 25px;
                font-weight: bold;
                text-align: center;
                color: coral;
                
            }
            #destacados{
                margin-top:25px;
                display: flex;
                justify-content: space-around; 
                flex-wrap: wrap;
                
            }
            #titulo{
                text-align: center;
                
            }
            #contenedor{
               text-align: center;
                
                
            }
            
        </style>
        
    </head>
    <body>
        
        <div id="contenedor">
            <div>
                <h1>Mi tienda de componentes para Ordenador</h1>
            </div>
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


