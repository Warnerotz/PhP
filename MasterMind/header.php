<?php

?>
<header>
    <div id='logo'>
        <a  href='index.php'>MASTER MIND</a>
    </div>
    <div id='login'>
        <?php
          if(usuario()){
          echo "<a  href='#'>Mi perfil</a>";  
          echo "<a  href='carrito.php'>Carrito</a>";
          echo "<a  href='logout.php'>Salir</a>";
          
        }else{
          echo "<a  href='login.php'>Login</a> |<a  href='#'>Registrar</a>";  
            
        };
        ?>
       
    </div>
</header>

