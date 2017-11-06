<?php
require "MasterClass.php";
require 'init.php';
//session_destroy();
//die;
$numIntentos = 0;
$terminada= false;
if (!isset($_SESSION['master'])) {
    $_SESSION['master'] = new MasterMind();
    $_SESSION['master']->generarJug();
}
$master = $_SESSION['master'];
var_dump($master);
$valor = 0;

if (isset($_GET['jugadas'])) {
    $valor = $master->compJugada($_GET['jugadas']);
    //var_dump($master);
    $numIntentos++;
    var_dump($valor);
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">        
    </head>
    <body>
        <?php require 'header.php' ?>
        <div id='mostrarJugadas'>
            <table>
                <tr>
                    <th>Jugada</th>
                    <th>Muertos</th>
                    <th>Heridos</th>
                </tr>
                
                <?php
                if($terminada===false){
                    foreach ($master->jugadas as $jugada => $valores) {
                        echo "<tr>";
                        echo "<td>$jugada</td>";
                        echo "<td>$valores[muertos]</td>";
                        echo "<td>$valores[heridos]</td>";
                        echo "</tr>";
                        if($valores['muertos']== MasterMind::LONGITUD){
                            $terminada = true;

                        }
                    }
                }    
                ?>
            </table>
        </div>

        <div id="inputable">
            <form method='get'>                
                <label for="juagadas">Jugada</label>
                <input type="text" name='jugadas' value=""/>
            </form>
        </div>
        
        <div id="error">
            <?php
             switch ($valor) {
                case 1 : {

                        echo"<span class='errores'>" . MasterMind::$errores[$valor] . "</span>";
                        break;
                    }
                case 2: {
                        echo"<span class='errores'>" . MasterMind::$errores[$valor] . "</span>";
                        break;
                    }
                case 3:
                     {
                        echo"<span class='errores'>" . MasterMind::$errores[$valor] . "</span>";
                        break;
                    }
            }
            
            if($terminada){
                echo"<span class='win'>Enhorabuena has ganado</span><br>";
                
            }
            
            if($numIntentos == MasterMind::JUGADAS){
                echo"<span class='errores'>Sintiendolo mucho has perdido</span><br>";
                
            }
            ?>
            
            
        </div>
        <div id="volverJugar">
            <a class="boton_personalizado" href='index.php'>Volver a jugar</a>
        </div>
    </body>

</html>






