
<html>
    <head>
        <style>
            input{
                margin: 10px;
                
            }
            #form{
                width: 70%;
                margin: auto;
            }
            
        </style>
    </head>
    <body>
        <div id="form">
        <form  method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?= $usuario->nombre ?>"/><br>
            <?php if($tipo =='insert') : ?>
            <label for="pass">Password:</label>
            <input type="password" name="pass" value="<?= $usuario->password ?>"/><br>
            <label for="pass">Usuario:</label>
            <input type="text" name="user" value="<?= $usuario->usuario ?>"/><br>
            <?php endif; ?>
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?= $usuario->email ?>"/><br>
            <label for="estado">Estado:</label>
            <select name="estado">
                <?php
                  foreach($estados as $valor=>$label):
                 ?>
                <option value='<?=$valor?>' <?=$usuario->estado==$valor?'selected':'' ?>><?= $label ?></option>
                 <?php endforeach; ?>

            </select><br>
            <?php if($tipo =='insert') { ?>
            <input type="submit" name="insertar" value="insertar usuario"/>
            <?php }else{ ?>
            <input type="submit" name="modificar" value="Modificar"/>
            <?php } ?>
        </form>
            
         </div>   
    </body>
</html>
