<?php
?>

<div class="articulo">     
    <a href='<?= $ruta.$articulo['imagen'] ?>'><img src='<?= $ruta.$articulo['imagen'] ?>'></a>
    <h3 id='nombreArt'><?=$articulo['nombre']?></h3>       
    <p id='precio'><?=$articulo['precio']?>€</p>
    
</div>
