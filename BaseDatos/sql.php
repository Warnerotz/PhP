<?php
$enlace =  mysqli_connect('localhost', 'root', '')or 
    die('No pudo conectarse: ' . mysqli_error());

mysqli_select_db($enlace, 'blog');

$query = mysqli_query($enlace,'SELECT * FROM usuarios order by nombre');
$datos=mysqli_fetch_assoc($query);
/*
echo "<li>$datos[nombre]</li>";
echo '<pre>';
$datos = mysqli_fetch_object($query);
echo "<li>".$datos -> nombre."</li>";

$todo = mysqli_fetch_all($query);



    
    

//echo 'Conectado satisfactoriamente';
//mysqli_close($enlace);
 * 
 */

while($datos = mysqli_fetch_object($query)){
    
    echo "<li>".$datos->nombre;
    echo "<a href='modifica.php?id=$datos->id'>MODIFICAR</a>";
    
}

?>
