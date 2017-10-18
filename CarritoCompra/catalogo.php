<?php
require 'init.php';

if(isset($_GET['Seguir'])){
    if(isset($_GET['cat'])){
        foreach($articulos as $codigo => $valor){
            if($valor['categoria'] === $_GET['cat']){
                $lista[] = $codigo;                
            }
        }
        
    }else{
        echo 'error la categoria es necesaria';
        
    }
  
    
}else{
    
    
}

?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <style type="text/css">
            .boton_personalizado{
                text-decoration: none;
                padding: 10px;
                font-weight: bold;
                font-size: 15px;
                color: #ffffff;
                background-color: #1883ba;
                border-radius: 6px;
                border: 2px solid #0016b0;
                display: block;
            }
            
        </style>
        
    </head>
    <body>
        
            <table>
                <tr>
                    <?php
                    foreach($lista as $valor){
                        $art = $articulos[$valor];
                        $cod = $art['codigo'];
                        $link = "informacion.php?cod=$cod";                                                
                        echo "<td>".$art['nombre']."<br><a class='boton_personalizado' href='$link'>Comprar</a></td>";
                        
                        
                    }
                    ?>
                </tr>

            </table>        
        
    </body>

</html>

