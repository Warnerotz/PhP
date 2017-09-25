<?php

if (isset($_GET["tabla"])) {
    $tabla = $_GET["tabla"];
} else {
    $tabla = 1;
}

$muliplicador = rand(1, 10);

echo "<h3>Practica la tabla del $tabla</h3>";
echo "<p>$tabla x $muliplicador = ";
echo "<form action='evaluar.php'>";
echo "<input type='text' value='introduce numero' name='resp'>";
echo "<input type='submit' value='Comprueba'>";
echo "<input type='hidden'name='tabla' value='$tabla'>";
echo "<input type='hidden'name='mult' value='$muliplicador'>";
echo "</form>"
//printf("%d x %d = %d",$tabla,$i,$tabla*$i);
?>

