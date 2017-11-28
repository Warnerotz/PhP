<?php
session_start(['cookie_lifetime' => 60*60*24*30]);



$enlace =  mysqli_connect('localhost', 'root', '')or 
    die('No pudo conectarse: ' . mysqli_error());
mysqli_select_db($enlace, 'blog');


function usuario(){
    if(isset($_SESSION['usuario']))
            return $_SESSION['usuario'];
    else
        return false;
}
/*
function login($usuario,$pass){
    global $enlace;
    $passmd5 = md5($pass);
    $query = mysqli_query($enlace,"SELECT usuario, password, estado FROM usuarios WHERE usuario = '$usuario' and password = '$passmd5'");    
    $datos = mysqli_fetch_assoc($query);
    var_dump($datos);
    die();
    
    if(!$query || $datos['estado']=="P")
        return false;
    else {
        $_SESSION['usuario']=$usuario;
        return true;
    }
    
}
*/
function login($usuario,$pass){
    global $enlace;
    $passmd5 = md5($pass);
    $query = mysqli_query($enlace,"SELECT usuario, password, estado FROM usuarios WHERE usuario = '$usuario' and password = '$passmd5'");    
    $datos = mysqli_fetch_assoc($query);
    var_dump($datos);
    die();
    
    if(!$query || $datos['estado']=="P")
        return false;
    else {
        $_SESSION['usuario']=$usuario;
        return true;
    }
    
}

function logout(){
    session_destroy();
}
