<?php
require "MasterClass.php";
require 'init.php';
//session_destroy();
//die;
$jugadasRestantes = 0;
$numIntentos = 0;
$terminada= false;
if (!isset($_SESSION['master'])) {
    $_SESSION['master'] = new MasterMind();
    if(isset($_POST['facil'])){
        $_SESSION['master']->longitud = 4;        
        $_SESSION['master']->intentos = 7;
        $_SESSION['master']->tamañoAdivina = 6;        
    }
    if(isset($_POST['intermedio'])){
        $_SESSION['master']->longitud = 6;        
        $_SESSION['master']->intentos = 6;
        $_SESSION['master']->tamañoAdivina = 7;        
    }
    
    if(isset($_POST['dificil'])){
        $_SESSION['master']->longitud = 8;        
        $_SESSION['master']->intentos = 4;
        $_SESSION['master']->tamañoAdivina = 8;        
    }
    
    $_SESSION['master']->generarJug();
    $jugadasRestantes = $_SESSION['master']->intentos;
}
$master = $_SESSION['master'];

var_dump($master);
$valor = 0;
$jugadasRestantes= $master->intentos;
//var_dump($jugadasRestantes);
if (isset($_GET['jugadas'])) {
    
    $valor = $master->compJugada($_GET['jugadas']);
    //var_dump($master);
    --$jugadasRestantes;
    ++$numIntentos;
    var_dump($jugadasRestantes);
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
        <div id="restantes">
            <?="<p>Jugadas restantes<br>".$numIntentos++."</p>" ?>
            
        </div>
        <div id='mostrarJugadas'>
            <table>
                <!--
                <tr>
                    
                    <th>Jugada</th>
                    <th>Muertos</th>
                    <th>Heridos</th>
                </tr>
                -->
                <?php
                if($terminada===false){
                    foreach ($master->jugadas as $jugada => $valores) {
                        $arrayJug = str_split($jugada);
                        echo "<tr>";
                        for($i=0; $i< $master->longitud; $i++){
                            echo "<td class='casilla'>$arrayJug[$i]</td>";
                        }
                        echo "<td class='muerHeri'>Muertos  $valores[muertos]</td>";
                        echo "<td class='muerHeri'>Heridos  $valores[heridos]</td>";
                        echo "</tr>";
                        if($valores['muertos']== $master->longitud){
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
            
            if($numIntentos == $master->intentos){
                echo"<span class='errores'>Sintiendolo mucho has perdido</span><br>";
                
            }
            ?>
            
            
        </div>
        <div id="volverJugar">
            <a class="boton_personalizado" href='index.php'>Volver a jugar</a>
        </div>
    </body>

</html>






