<?php
require 'init.php';

if (isset($_GET['codigo'])) {
    $articulo = $articulos[$_GET['codigo']];
   
}

if(isset($_POST['agregar'])){
    if($_POST['cantidad']>0){
        $_SESSION['carrito'][$articulo['codigo']] = $_POST['cantidad'];
        
    }else{
        echo 'error introduce numero mayor que 0';
        
    }
    
 var_dump($_SESSION['carrito']);   
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
                
                <h3><?= $articulo['nombre'] ?></h3>
               
                <a href='<?= $ruta . $articulo['imagen'] ?>'><img src='<?= $ruta . $articulo['imagen'] ?>'></a>
                
                <p><?= $articulo['descripcion'] ?></p>
                <form method="post">
                    <input id='carrito' type="submit" name='agregar' value="añadir carrito"/>
                    <input id='cant' type="number" name='cantidad'/>
                </form>
            </div>


        </div>


    </body>

</html>