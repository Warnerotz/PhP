<?php
$carpetaDestino = 'imagenes/';
if(isset($_POST['eliminar'])){
    
    $eliminar = true;
    var_dump($_POST['borrar']);
    //foreach ($_POST['borrar'] as $valor);    
}

if(isset($_POST['confirmar'])){    
    foreach($_POST['borrar'] as $valor){
        if(count($_POST['borrar'])!=0){
            unlink($carpetaDestino."/".$valor);
        }else{
            
            echo 'no ha seleccionado ninguna imagen';
        }
        
    }
    header("location:index.php");
}

?>

<html>
    <meta charset="utf-8" />    
    <head>
        <meta charset="UTF-8">
        <title>Borrado de imagenes</title>
    </head>
    <style>
          .boton{
             background: #EEE;
            color: #222;
            border: 1px outset #CCC;
            padding: .1em .5em;
            display:block;
            width: 45px;
           
            margin-left: 10px;
            
        }
    </style>
    <body>
        <form method="post">
            <h2>Eliminacion de Imagenes</h2>
            <?php
            if($eliminar){
                echo 'desea eliminar las siguientes imagenes:<br>';
                foreach($_POST['borrar'] as $valor){
                    echo $valor.'<br>';
                    echo"<input type='hidden' name='borrar[]' value='$valor'/>";
                }
               echo"<input type='submit' name='confirmar' value='confirmar'/>";
                
            }
            ?>
            <a class="boton" href="index.php">Volver</a>
        </form>
    </body>
</html>

