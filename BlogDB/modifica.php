<?php
require "init.php";
$tipo = 'modificar';
if (isset($_GET['id'])) {

    $query = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id= $_GET[id]");

    $usuario = mysqli_fetch_object($query);
    if(!$usuario) die("Usuario inexistente");
    //var_dump($datos);
}else{
    
    die("Error de ejecucion");
}

//procesamos formualario
if(isset($_POST['modificar'])){
    $query2 = sprintf("UPDATE usuarios SET nombre='%s', email='%s', estado='%s' where id=%d",
            $_POST['nombre'],$_POST['email'],$_POST['estado'], $_GET['id']);
    
    //$query ="UPDATE usuarios set nombre ='$_POST[nombre]', email='$_POST[email]', estado='$_POST[estado]' where id= $_GET[id]";
   
    if(!mysqli_query($enlace, $query2)){
        echo "ERROR AL ACTUALIZAR";
        
    }else{
        header('location:blog.php');
    }
}

require "vistas/formusuario.php";
?>