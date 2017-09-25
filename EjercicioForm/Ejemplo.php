<?php

if (isset($_GET["enviar"])) {//venimos de rellenar el formulario.
    $telefono =$_GET["telef"];
    
    if(!$telefono)
        $error = "Error, el telefono es requerido";
    elseif(strlen($telefono)!=9){
        $error = "Error, el telefono no es correcto ";
        
        
    }else{
        echo "Inscripcion correcta";
        die();//nos iriamos a la pantalla principal... o donde sea.
        
    }
}else{ //formulario inicial. valores x defecto
    
    $telefono='';
} 


//en este punto $error contiene el error, si lo hay, y $telefono el telefono actual
?>
<h2>Inscripción</h2>
<form>
    Telefono: <input type="text" name="telef" value='<?= $telefono?>'>
    <span style="color:red"><?php if(isset($error)) echo $error; ?></span><br>
    <input type="submit" name="enviar" value="enviar">
    
</form>