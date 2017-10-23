<?php
require 'init.php';

if (isset($_GET['Seguir'])) {
    if (isset($_GET['cat'])) {
        foreach ($articulos as $codigo => $valor) {
            if ($valor['categoria'] === $_GET['cat']) {
                $lista[] = $codigo;
            }
        }
    } else {
        echo 'error la categoria es necesaria';
    }
} else {
    
}
/*
if (isset($_GET['cat'])) {
        foreach ($articulos as $codigo => $valor) {
            if ($valor['categoria'] === $_GET['cat']) {
                $lista[] = $codigo;
            }
        }
    } else {
        echo 'error la categoria es necesaria';
    }

 */   
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

    </head>
    <body>        
        <?php require 'montaHeader.php'; ?>
        
        <?php
            if($_GET['cat']==='TG'){
                echo '<h2 id="tituloCat">Targetas graficas</h2>';

            }else{
                echo '<h2 id="tituloCat">Monitores</h2>';
                
            }
        ?>
        <div id='catalogo'>
            <?php
            foreach ($lista as $valor) {
                $articulo = $articulos[$valor];
                require 'montaje.php';            }
            ?>
        </div>     
        <div>
            <a style="width: 150px; margin: 0 auto; margin-top: 2%; text-align: center" class="boton_personalizado" href='index.php'>Volver</a>
        </div>
    </body>

</html>

