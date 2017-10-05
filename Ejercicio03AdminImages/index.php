<?php
$directorio = "imagenes";
$ficheros = scandir($directorio);

if(isset($_POST('enviar'))){
    
    
}

?>



<html>
    <meta charset="utf-8" />    
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03 Upload</title>
    </head>
    <style>
        td{
            border: 1px solid red;
            text-align: center;
            
        }
        img{
              width: 300px;
              height: 300px;

            
        }
        
        a{
            display:block;
        }

    </style>
    <body>
        <table>
            <tr>
                <?php
                  for ($i = 2; $i < count($ficheros); $i++) {                    
                        echo "<td><a href='imagenes/$ficheros[$i]'><img src='imagenes/$ficheros[$i]'></a>"
                                . "<input type='checkbox' id='check$i' value='selecFoto'> <label for='check'>Seleccionada</label>"
                                . "</td>";
                 }
                ?>
            </tr>


        </table>
        <input type="submit" name="enviar" value="enviar"/>
    </body>
</html>
