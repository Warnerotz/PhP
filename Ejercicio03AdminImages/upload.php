<?php
$carpetaDestino = 'imagenes/';

if (isset($_FILES['fichero'])) {
    for ($i = 0; $i < count($_FILES['fichero']['name']); $i++) {
        if ($_FILES['fichero']['name'][$i]) {
            if (file_exists($carpetaDestino)) {
                $origen = $_FILES['fichero']['tmp_name'][$i];
                $destino = $carpetaDestino . $_FILES['fichero']['name'][$i];
                if (@move_uploaded_file($origen, $destino)) {
                    echo "<br>" . $_FILES["fichero"]["name"][$i] . " movido correctamente";
                } else {
                    echo "<br>No se ha podido mover el archivo: " . $_FILES["archivo"]["name"][$i];
                }
            } else {
                echo "<br> carpeta destino no existe";
            }
        }
    }
    
    header("location:index.php");
}

?>

<html>
    <meta charset="utf-8" />    
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03 Upload</title>
    </head>
    <style>
        
        form{
            
            
        }

        label{          

        }
        #formulario{
            margin:0 auto;
            width: 350px;
        }

    </style>

    <body>
        <div id="formulario">
            <form method="post" enctype="multipart/form-data" >
                <label for="fichero01">Fichero 1:</label>
                <input type="file" name="fichero[]"><br>
                <label for="fichero02">Fichero 2:</label>
                <input type="file" name="fichero[]"><br>
                <label for="fichero03">Fichero 3:</label>
                <input type="file" name="fichero[]"><br>
                <label for="fichero04">Fichero 4:</label>
                <input type="file" name="fichero[]"><br>
                <label for="fichero05">Fichero 5:</label>
                <input type="file" name="fichero[]"><br>

                <input type="submit" name="enviar" value="subir">
            </form>
        </div>            
    </body>
</html>