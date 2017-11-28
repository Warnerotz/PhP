<?php

require "init.php";


$query = mysqli_query($enlace,'SELECT * FROM usuarios order by nombre');

//$datos=mysqli_fetch_assoc($query);

while($datos = mysqli_fetch_object($query)){
    
    echo "<li>".$datos->nombre;
    echo "<a href='modifica.php?id=$datos->id'>MODIFICAR</a>";
    
}
 
?>

<form method="post" action="insert.php">
    <input type="submit" name="introducir" value="nuevo Registro"/>
    
</form>