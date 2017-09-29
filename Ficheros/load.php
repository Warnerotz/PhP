<?php
if(isset($_FILES['fichero'])){
    if($_FILES['fichero']['error']){
        die('Error al subir fichero');
        
    }else{
        echo file_get_contents($_FILES['fichero']['tmp_name']);
        //mueve el fichero selecionado a donde tu quieres
        move_uploaded_file($_FILES['fichero']['tmp_name'], 'log4.txt');
        
    }
    
    
}

?>

<form method="post" enctype="multipart/form-data">
    Fichero: <input type="file" name="fichero"><br>
    <input type="submit" value="subir">  
    
</form>    