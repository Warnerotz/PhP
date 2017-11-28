<?php
require "init.php";
require 'Usuario.php';

$tipo = "insert";
$usuario = new Usuario;


if(isset($_POST['insertar'])){
   
    
    $query2 = sprintf("INSERT INTO usuarios (nombre, email, password, usuario, estado) VALUES ('%s','%s','%s','%s','%s')",
            $_POST['nombre'],$_POST['email'],md5($_POST['pass']), $_POST['user'],$_POST['estado']);
    
     if(!mysqli_query($enlace, $query2)){
        echo "ERROR AL ACTUALIZAR";
        
    }else{
        header('location:blog.php');
    }
    
    
}


require 'vistas/formusuario.php';
?>

