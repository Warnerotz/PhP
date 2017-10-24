<?php
require 'init.php';

if (isset($_GET['codigo'])) {
    $articulo = $articulos[$_GET['codigo']];
   
}

if(isset($_POST['agregar'])){
    if($_POST['cantidad']>0){
        if(!isset($_SESSION['carrito'][$articulo['codigo']])){
            $_SESSION['carrito'][$articulo['codigo']] = $_POST['cantidad'];           
        }else{
            $_SESSION['carrito'][$articulo['codigo']] += $_POST['cantidad'];                       
        }
        if($articulo['categoria']==='TG'){
            header("Refresh:2; url=catalogo.php?cat=TG&Seguir=seguir");
        }else{
            header("Refresh:2; url=catalogo.php?cat=M&Seguir=seguir");            
        }
        
        
    }else{
        $errores['cantidad'] ='cantidad debe ser mayor que 0';
        
    }
 
}
 ;

?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

    </head>
    <body>
        <?php require 'montaHeader.php'; ?>

        <div id='contenedorInfo'>
          <div id='informacionEl'>
                <div>
                    <h3><?= $articulo['nombre'] ?></h3>               
                    <a href='<?= $ruta . $articulo['imagen'] ?>'><img src='<?= $ruta . $articulo['imagen'] ?>'></a>
                </div>
                <div id='descripcion'>
                 <h3>Descripcion del articulo</h3>                  
                <p><?= $articulo['descripcion'] ?></p>
                <form method="post">
                    <input class="boton_personalizado" id='carrito' type="submit" name='agregar' value="añadir carrito"/>
                    <label for="cantidad">Cantidad:</label>                        
                    <input id='cant' type="number" name='cantidad'/><br>
                    <?php vererror("cantidad"); ?>
                </form>
                </div>
                
          </div>


        </div>


    </body>

</html>