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
$sexo = '';
$observaciones = '';
$password = '';
$condiciones = '';
$errores = [];
var_dump($_POST);


if (isset($_POST["Validar"])) {
    if ($_POST["nombre"] != '') {
        if (isset($_POST['edad'])) {
            if ($_POST['edad'] >= "1" && $_POST['edad'] <= "100") {
                
                
            }else{                
                $edad = $_POST['edad'];
                $errores['edad'] = "introduce numero entre 1 y 100";
            }
        }
    } else {
        $errores['nombre'] = "Campo requerido";
    }
}

/*
  if (isset($_POST["Validar"])) {
  if ($_POST["nombre"] == '') {
  $errores['nombre'] = "Campo requerido";
  }

  if (isset($_POST['edad'])) {
  if ($_POST['edad'] <= "1" && $_POST['edad'] >= "100") {
  $edad = $_POST['edad'];
  $errores['edad'] = "introduce numero entre 1 y 100";
  }
  }


  }
 */
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
<?php
if (isset($errores['nombre']))
    echo "<span style='color:red'>$errores[nombre]</span><br>"
    ?>
            </p>
            <p>            
                Edad: <input type='number' name='edad' value='<?= $edad ?>'>
<?php if (isset($errores['edad'])) echo "<span style='color:red'>$errores[edad]</span><br>" ?>
            </p>

            <p>
                email: <input type='text'  name='email' value='<?= $email ?>'>                
            </p>

            <p>
                sexo:  <input type="radio" name="hombre" value='<?= $sexo ?>' />hombre
                <input type="radio" name="mujer" value='<?= $sexo ?>' /> mujer              
            </p>
            <p>
                Observaciones : <textarea name='observaciones' value=''></textarea>
            </p>
            <p>
                Password: <input type='password' name='pass' valeu='<?= $password ?>'>
            </p>
            <p>
                Acepto condiciones: <input type='checkbox'name='condiciones' value='1'>
            </p>
            <p>
                <input type="submit" name="Validar" value="valida">
            </p>


        </form>



    </body>

</html>
