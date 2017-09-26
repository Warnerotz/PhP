<?php
/*

 * El nombre de usuario es requerido
  La edad es numérica entre 1 y 100
  La contraseña ha de tener al menos 6 caracteres
  El email ha de ser correcto (vale con comprobar que lleva una @)
  Se ha marcado la casilla de aceptación de condiciones */


$nombre = '';
$edad = '';
$email = '';
$hombre='';
$mujer = '';
$observaciones = '';
$password = '';
$condiciones = '';
$validado=false;
$errores = [];
var_dump($_POST);



if (isset($_POST["Validar"])) {
    //comprobamos nombre
    if ($_POST["nombre"] == '') {
        $errores['nombre'] = "Campo requerido";
    }
    //comprobamos edad
    if (isset($_POST['edad'])) {
        if (is_numeric($_POST['edad'])) {
            if ($_POST['edad'] <= 1 || $_POST['edad'] >= 100) {
                $edad = $_POST['edad'];
                $errores['edad'] = "introduce numero entre 1 y 100";
            }
        }
    }
    //comprobamos email
    if (isset($_POST['email'])) {
        $pos = strpos($_POST['email'], '@');
        if ($pos === false) {
            $email = $_POST['email'];
            $errores['mail'] = "Introduce un mail correcto";
        }
    }
    //comprobamos radio de sexo
    if (isset($_POST['sexo'])) {
        if($_POST['sexo']==="hombre"){
            $hombre = "checked= 'checked'";
        }else{
            $mujer = "checked= 'checked'";
            
        }
    }else{
        $errores['sexo'] = "debes seleccionar un sexo";
    }
    //comprobamos password
    if (isset($_POST['pass'])) {
        if (strlen($_POST['pass']) < 6) {
            $errores['pass'] = "el pasword debe tener 6 caracteres";
        }
    }

    //valido checkbox
    if (!isset($_POST['condiciones'])) {
        $errores['condiciones'] = "debes aceptar las condiciones";
        $condiciones = "";
    }else{
        $condiciones ="checked = 'checked'";
        
    }
    
    
    var_dump($errores);
    if ($errores) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];        
    }else{
        $validado = true;
        
    }
}

function vererror($variable) {
    //hace global la variable errores
    global $errores;
    if (isset($errores[$variable])) {
        echo "<span style='color:red'>$errores[$variable]</span><br>";
    }
}
?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>

    <body>
        <form method='post'>
            <h1>Registro de usuario</h1>
            <p>
                Nombre de usuario: <input type='text' name='nombre' value='<?= $nombre ?>'>
                <?php vererror("nombre"); ?>
            </p>
            <p>            
                Edad: <input type='number' name='edad' value='<?= $edad ?>'>
                <?php vererror("edad"); ?>
            </p>

            <p>
                email: <input type='text'  name='email' value='<?= $email ?>'>
                <?php vererror("mail"); ?>
            </p>

            <p>
                sexo:  <input type="radio" name="sexo" value='hombre'<?= $hombre ?> />hombre
                <input type="radio" name="sexo" value='mujer' <?= $mujer ?>/> mujer
                <?php vererror("sexo"); ?>
            </p>
            <p>
                Observaciones : <textarea name='observaciones' value=''></textarea>
            </p>
            <p>
                Password: <input type='password' name='pass' valeu='<?= $password ?>'>
                <?php vererror("pass"); ?>
            </p>
            <p>
                Acepto condiciones: <input type='checkbox'name='condiciones' value='1' <?= $condiciones ?>>
                <?php vererror("condiciones"); ?>
            </p>
            <p>
                <input type="submit" name="Validar" value="valida">
            </p> 
            
            <?php
                if($validado){
                    
                    echo "<h1>FORMULARIO VALIDADO</h1>";
                }
            ?>


        </form>



    </body>

</html>
