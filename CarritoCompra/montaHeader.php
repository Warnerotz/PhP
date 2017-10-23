<?php ?>

<header>
    <div id='logo'>
        <a style='color: black' href='index.php'>AwaSomePC</a>
    </div>
    <div id='login'>
        <?php
          if(usuario()){
          echo "<a style='color: black' href='#'>Mi perfil</a>";  
          echo "<a style='color: black' href='carrito.php'>Carrito</a>";
          echo "<a style='color: black' href='logout.php'>Salir</a>";
          
        }else{
          echo "<a style='color: black' href='login.php'>Login</a> |<a style='color: black' href='#'>Registrar</a>";  
            
        };
        ?>
        
    </div>
</header>

