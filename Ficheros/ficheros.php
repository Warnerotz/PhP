<?php
//fopen funcion q se le pasa el fichero y la forma en la que quieres abrirlo.
$f = fopen("log.txt","r");
//fgets coge la primera linea del fichero.
$lineas = [];
While($lineas[] = fgets($f));
    //print_r($lineas);  
    //echo '<li>'.$linea;
//fclose cierra el fichero.
fclose($f);
//ESCRIBIMOS EN OTRO FICHERO
$f2= fopen("log2.txt","w");
    

foreach($lineas as $l){
    fputs($f2,'!!!!'.$l);
}
fclose($f2);


//file abre el fichero lo mete en un array y lo cierra.
//$lineas = file('log.txt');
//var_dump($lineas);
//file_get_contents coge el contenido completo del fichero en una variable.
$contenido = file_get_contents("log.txt");
echo str_replace("\n","<br>",$contenido);

file_put_contents("log3.txt",str_replace("\n","!!!",$contenido));
?>


