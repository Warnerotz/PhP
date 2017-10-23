<?php
require 'init.php';
if(isset($_SESSION['carrito'])){
   foreach($_SESSION['carrito'] as $codigo => $valor){
       $listaCarrito[] = $articulos[$codigo];       
   }
    
    
}else{
    
    $errores['carrito'] = 'no hay ningun elemento en el carrito';
}
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

    </head>
    <body>        
        <?php require 'montaHeader.php'; ?>
        <table>
            <tr>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Precio</th>
            </tr>
            
            <?php
                foreach($_SESSION['carrito'] as $codigo => $cantidad){
                    $articulo = $articulos[$codigo];
                    echo '<tr>';
                    echo "<td>$cantidad</td>";
                    echo "<td>$articulo[nombre]</td>";
                    echo "<td>$articulo[precio]€</td>";
                    echo '</tr>';
                }
            ?>
            
        </table>
        
        
    </body>

</html>