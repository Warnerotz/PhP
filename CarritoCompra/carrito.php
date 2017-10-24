<?php
require 'init.php';


if(isset($_POST['comprobar'])){
    if(isset($_POST['borrar'])){
        if(count($_POST['borrar'])>0){
            for($i=0; $i<count($_POST['borrar']);$i++){
            unset($_SESSION['carrito'][$_POST['borrar'][$i]]);
            }
        }
        
    }
    
    if(isset($_POST['cantidad'])){
       
        
    }
    
    
    
    
    
           
}

if(isset($_POST['terminar'])){    
    $_SESSION['carrito']=[];
    header("Location: index.php");
    
    
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
        <?php
        if($_SESSION['carrito']){
        ?>                    
        <div id="tablaCarrito">
            
            <form method="post">
                <table>
                    <tr>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                    </tr>
                   <?php 
                            
                            $i=0;
                            $precioTotal=0;
                            foreach($_SESSION['carrito'] as $codigo => $cantidad){
                                $articulo = $articulos[$codigo];
                                echo '<tr>';
                                echo "<td><input style='width: 50px; text-align: center; background: trasparent' type='number' name='cantidad[]' value='$cantidad'></td>";                                
                                echo "<td>$articulo[nombre]</td>";
                                echo "<td>$articulo[precio]€</td>";
                                echo "<td><input type='checkbox' id='check$i' name='borrar[]' value='$articulo[codigo]'></td>";
                                echo '</tr>';
                                $precioTotal+= $articulo['precio'];
                                $i++;
                            }
                    ?>
                    <tr>
                        <td colspan="2" style="text-align: right">Total:</td>
                        <td><?=$precioTotal?>€</td>
                    </tr>

                </table>
                <div id="botonesCarrito">
                    <input id="botComp" class="boton_personalizado" type="submit" name="comprobar" value="Actualizar carro"/>
                    <input id="botTerm" class="boton_personalizado" type="submit" name="terminar" value="Terminar compra"/>
                </div>
            </form>

        </div>    
        <?php
        
                            
                        }else{
                            $errores['carrito'] = 'no hay ningun elemento en el carrito';
                            vererror('carrito');
                        }
                        
        ?>                
    </body>

</html>