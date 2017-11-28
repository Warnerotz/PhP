<?php
require "MasterClass.php";
require 'init.php';
//session_destroy();
//die;

if (!isset($_SESSION['master'])) {
    $_SESSION['master'] = new MasterMind();
    if (isset($_POST['facil'])) {
        $_SESSION['master']->setnivel(1);
    }
    if (isset($_POST['intermedio'])) {
        $_SESSION['master']->setnivel(2);
    }

    if (isset($_POST['dificil'])) {
        $_SESSION['master']->setnivel(3);
    }

    $_SESSION['master']->generarJug();
    $jugadasRestantes = $_SESSION['master']->intentos;
}
$master = $_SESSION['master'];

//var_dump($master);
$valor = 0;

//echo $master->intentos;
//var_dump($jugadasRestantes);
if(isset($_GET['comprobar'])){
    if (isset($_GET['jugadas'])) {


            $valor = $master->compJugada($_GET['jugadas']);



        //$jugadasRestantes = $master->intentos - count($master->jugadas);
        //$numIntentos = count($master->jugadas);  
    }
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
        <div id="container">
            <div id="restantes"></div>
            <?php ?>
            <div id='mostrarJugadas'>
                <?= "<p>Jugadas restantes<br>" . $master->intentosRestantes() . "</p>" ?>
               
                <table id="jug">
                   
                    <?php
                    
                        foreach ($master->jugadas as $jugada => $valores) {
                            $arrayJug = str_split($jugada);
                            echo "<tr>";
                            for ($i = 0; $i < $master->longitud; $i++) {
                                echo "<td class='casilla'>$arrayJug[$i]</td>";
                            }
                            echo "<td class='muerHeri'>Muertos  $valores[muertos]</td>";
                            echo "<td class='muerHeri'>Heridos  $valores[heridos]</td>";
                            echo "</tr>";
                            /*  if ($valores['muertos'] == $master->longitud) {
                              $terminada = true;
                              }
                             */
                        }
                    ?>
                </table>
            </div>
                

            <div id="informacion">              
            </div>

        </div>
        <?php
        if($valor!=4 || $valor!=5){
        ?>
        <div id="inputable">
            <form method='get'>                
               <!-- <label for="juagadas">Jugada</label> -->
                <input id="comp"  type="text" name='jugadas' value="" placeholder="Jugada"/>
                <input class="boton_personalizado" type="submit" name='comprobar' value="Comprobar" />
                <a class="boton_personalizado" href='index.php'>Volver a jugar</a>
            </form>
        </div>
        <?php } ?>
        <div id="error">
            <?php
            if ($valor != 0 && $valor !=5 && $valor !=4)
                echo"<span class='errores'>" . MasterMind::$errores[$valor] . "</span>";
            if($valor == 5){
                echo"<span class='win'>" . MasterMind::$errores[$valor] . "</span>";
                
            }
            if($valor ==4){
                $adivina = implode($master->adivina);
                echo"<span class='errores'>" . MasterMind::$errores[$valor] ." Numero: $adivina". "</span>";
                
            }
            ?>


        </div>        

    </body>

</html>

