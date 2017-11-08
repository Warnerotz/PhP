<?php
/*
$file = fopen("archivos/webBaners.txt","r");
$lineas=[];
global $array2;
$array2=[];
While($lineas[] = trim(fgets($file)));
foreach ($lineas as $linea){
    if($linea != ""){
        $array = explode(",", $linea);       
        $array2[]=[
            $array[0] => $array[1]
            
        ]; 
    }
}
var_dump($array2);
*/

$banners=[
	'zara'=>['url'=>'http://www.zara.com'],
	'ebay'=>['url'=>'http://www.ebay.com'],
	'cocacola'=>['url'=>'http://www.cocacola.com'],
	];





function getbanner(){
	global $banners;
	static $claves;
	if(!isset($claves)) {
		$claves=array_keys($banners);
		shuffle($claves);
	}
	$id=array_shift($claves);
	printf("<a href=clickado.php?id=%s>%s</a>",$id,$banners[$id]['url']);
	
}



?>