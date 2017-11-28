<html>
    <head>
        <style>
            span{font-face:Verdana}
            .contador{font-size:2em;width:100%;background:#eed}
            input{font-size:2em}
            .bola{float:left;font-size:2.2em;text-align:center;margin:7px;padding:7px;border-radius:50%;
                  background-color:#ddd;width:40px;height:40px}
            .salida{font-weight:bold; background-color:yellow}


        </style>
    </head>
    <body>
        <div class=contador>Bolas Jugadas: <? count($bolas) ?></div>
        <table>
            <?php
           
            $numero = 0;            
            for ($i = 0; $i < 9; $i++) {
                echo '<tr>';
                for ($j = 0; $j < 10; $j++) {
                    $numero++;
                    $marcada = false;
                    if (isset($_SESSION['jugadas'])) {
                         
                        foreach ($_SESSION['jugadas'] as $codigo => $valor) {
                            if ($numero == $valor) {
                                $marcada = true;
                            }
                        }
                    }
                    if ($marcada) {
                        echo "<td class='bola salida'>$numero</td>";
                    } else {
                        echo "<td class='bola'>$numero</td>";
                    }
                }
            }
            echo '</tr>';

//Pinta tablero
            ?>

        </table>                    
        <div style="clear:left"></div>
        <form method="post">
            <input type="text" name="bola" size="2" >
            <input type="submit" name="acc" value="Marcar">
            <input type="submit" name="des" value="Deshacer">
            <input type="submit" name="emp" value="Empezar">
        </form>

    </body>
</html>

