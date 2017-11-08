<?php
require 'banner.php';
if(!isset($_GET['id'])) die('Ejecucion incorrecta');

//Registramos clic
$id=$_GET['id'];
$f=fopen('archivos/clicks.log','a');
fprintf($f,"%s,%s,%s\n",$id,date('d/m/Y'),date('h:i'));
fclose ($f);
//Vamos al destino del banner
header('Location: '.$banners[$id]['url']);
?>
