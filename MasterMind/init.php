<?php
session_start();


function usuario(){
    if(isset($_SESSION['usuario']))
            return $_SESSION['usuario'];
    else
        return false;
}

function login($usuario,$pass){
    $usuarios=array('admin'=>'1234','pepe'=>'pepe');
    if(!isset($usuarios[$usuario]) || $usuarios[$usuario]!=$pass)
        return false;
    else {
        $_SESSION['usuario']=$usuario;
        return true;
    }
    
}

function logout(){
    session_destroy();
    
}


