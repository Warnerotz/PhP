
<h3>Tabla de Multiplicar</h3>
<style>
    .tabla{

        border: solid 1px;
        background-color: aquamarine;
        width: 140px;
        text-align: center;
        float: left;
        margin: 15px;
    }
    p{
        padding: 0px;
        margin: 0px;
    }

</style>



<?php
//si existe el get lo usa sino valor por defecto.
if (isset($_GET["t1"])) {
    $tabla1 = $_GET["t1"];
} else {
    $tabla = 1;
}

if (isset($_GET["t2"])) {
    $tabla2 = $_GET["t2"];
} else {
    $tabla2 = 10;
}



for ($j = $tabla1; $j <= $tabla2; $j++) {

    echo "<div class=tabla>";
    echo "<h4>tabla del $tabla1</h4>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$tabla1 x $i = " . ($tabla1 * $i) . "</p><br>";
        //printf("%d x %d = %d",$tabla,$i,$tabla*$i);
    }
    echo "<a href=\"practicaTodoUna.php?tabla=$tabla1\">Practica</a>";
    echo "</div>";
    $tabla1++;
}
?>
<div style="clear: left"></div>
<hr>

<a href="index.php">Volver al inicio</a>


<!--
//OTRAFORMA
$tabla= 5;
<h3>Tabla de Multiplicar</h3>

<div class=tabla2>
    <table>
<?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <td><?= "$tabla x $i="; ?></td>
                <td><?= $tabla * $i; ?></td>
            </tr>
<?php endfor; ?>
    </table>
    
</div>
-->