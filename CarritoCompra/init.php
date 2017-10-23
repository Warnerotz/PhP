<?php
session_start();
$ruta="imagenes/";
$errores=[];
$descripcion = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$categorias = ['TG' => 'Tarjetas Graficas', 'M' => 'Monitores'];
$articulos =[
    'TG01' =>['codigo' =>'TG01', 'nombre'=>'GeForce GTX 1050Ti', 'precio'=>175,'imagen'=>'grafica01.png','descripcion'=>"$descripcion" ,'destacado'=>true,'categoria'=>'TG'],
    'TG02' =>['codigo' =>'TG02', 'nombre'=>'GeForce GTX 1060', 'precio'=>325,'imagen'=>'grafica02.png' ,'descripcion'=>"$descripcion" ,'destacado'=>false,'categoria'=>'TG'],
    'TG03' =>['codigo' =>'TG03', 'nombre'=>'GeForce GTX 1080Ti', 'precio'=>799,'imagen'=>'grafica03.png','descripcion'=>"$descripcion",'destacado'=> true,'categoria'=>'TG'],
    /*'T04' =>['codigo' =>'T04', 'nombre'=>'Televisor 50"', 'precio'=>400, 'categoria'=>'TV'],*/
    'M01' =>['codigo' =>'M01', 'nombre'=>'Acer Predator 27"', 'precio'=>589,'imagen'=>'monitor01.png','descripcion'=>"$descripcion", 'destacado'=>true,'categoria'=>'M'],
    'M02' =>['codigo' =>'M02', 'nombre'=>'Benq Zowie 27"', 'precio'=>493,'imagen'=>'monitor02.png','descripcion'=>"$descripcion",'destacado'=>false,'categoria'=>'M'],
    'M03' =>['codigo' =>'M03', 'nombre'=>'Benq PV270 27"', 'precio'=>879,'imagen'=>'monitor03.png','descripcion'=>"$descripcion",'destacado'=>true,'categoria'=>'M'],
    /*'P04' =>['codigo' =>'P04', 'nombre'=>'Ordenador sony', 'precio'=>500, 'categoria'=>'PC'],*/
    //codigo nombre precio categoria
 
];

function usuario(){
    if(isset($_SESSION['usuario']))
            return $_SESSION['usuario'];
    else
        return false;
}

/** Login de un usuario
 * 
 * @param type $usuario
 * @param type $pass
 * @return boolean  Devuelve true o false si es correcto o no
 */
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


function vererror($variable) {
    //hace global la variable errores
    global $errores;
    if (isset($errores[$variable])) {
        echo "<span style='color:red'>$errores[$variable]</span><br>";
    }
}