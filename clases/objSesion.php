<?php
require 'clases.php';
session_start();

if(!isset($_SESSION['usuario'])){
    $user = new Persona;
    $_SESSION['usuario']=$user;
    $user->nombre='manolo';
    $user->edad= 25;
}else{
    $user= $_SESSION['usuario'];   
}

echo $user->edad;


