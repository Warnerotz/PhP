<?php
require 'init.php';

if(usuario())
    header('Location:index.php');

if(isset($_POST['entrar'])) {
    if(login($_POST['usuario'],$_POST['pass'])){
        header('Location:index.php');
    } else
        $error='Usuario o contraseña incorrectos';
} else
    $error='';

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    </head>
    <body>
        <?php require 'montaHeader.php'; ?>
        <fieldset style='margin:auto;width:300px'>
        <legend>Login</legend>
        <form method="post">Usuario: <input name="usuario"><br>
            Contraseña: <input type="password" name="pass">
                    <?php if($error) echo "<div>$error</div>"; ?>
            <br>
            <input type="submit" name="entrar" value="Entrar">
        </form>
        </fieldset>
    </body>
</html>
