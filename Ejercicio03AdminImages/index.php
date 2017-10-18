<?php
$directorio = "imagenes";
$ficheros = scandir($directorio);

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
       

            
        }
        
        a{
            display:block;
            text-decoration: none;
           
        }
        .boton{
             background: #EEE;
            color: #222;
            border: 1px outset #CCC;
            padding: .1em .5em;
            display:block;
            width: 45px;
            float: left;
            margin-left: 10px;
            
        }
        #subir{
            float:left;
            
        }
  

        

    </style>
    <body>
        <form method="post" action="delete.php">
        <table>
            <tr>
                <?php
                  for ($i = 2; $i < count($ficheros); $i++) {                    
                        echo "<td><a href='imagenes/$ficheros[$i]'><img src='imagenes/$ficheros[$i]'></a>"
                                . "<input type='checkbox' id='check$i' name='borrar[]' value='$ficheros[$i]'> <label for='check$i'>Seleccionada</label>"
                                . "</td>";
                 }
                ?>
            </tr>


        </table>
            
        <input id="subir" type="submit" name="eliminar" value="eliminar"/>
        <a class="boton" href="upload.php">Subir</a>
        </form>
    </body>
</html>
