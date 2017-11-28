<?php
$enlace =  mysqli_connect('localhost', 'root', '')or 
    die('No pudo conectarse: ' . mysqli_error());

mysqli_select_db($enlace, 'blog');

//estados usuarios
$estados=["P"=>"Pend. confirmar","A"=>"Activo"];

