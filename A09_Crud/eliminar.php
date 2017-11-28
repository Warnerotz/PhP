<?php
require 'init.php';

if(!isset($_GET['id'])) die("Error de ejecución");

$id=$_GET['id'];

$query=mysqli_query($db,'select * from usuarios where id='.$id);

$usuario= mysqli_fetch_object($query,'Usuario');

if(!$usuario) die("Usuario inexistente");

$usuario->_isnew=false;

//Procesamos formulario
if(isset($_POST['actualiza'])){
            
    $sql=sprintf("update usuarios set nombre='%s',email='%s',estado='%s' where id=%d",
                varpost('nombre'),varpost('email'),varpost('estado'),$id);

   /* $sql="update usuarios set nombre='$_POST[nombre]',email='$_POST[email]',
             estado='$_POST[estado]' where id=$id";*/
//echo $sql;die;

    if(!mysqli_query($db,$sql))
        echo "ERROR AL ACTUALIZAR!!". $sql;
    else
        header('Location:index.php');
}

$vista='formusuario.php';
require 'vistas/layout.php';
?>