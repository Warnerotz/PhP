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
        var_dump($_POST);
        var_dump($_SESSION['carrito']);        
        foreach($_POST['cod'] as  $codigo => $valor){
            if($_POST['cantidad'][$codigo]>0){
                $_SESSION['carrito'][$valor] = $_POST['cantidad'][$codigo];
                
            }else if($_POST['cantidad'][$codigo]==0){
                unset($_SESSION['carrito'][$valor]);
                
            }else{
                
                $errores['actualizar'] ="cantidades deben ser mayor que 0";
            }
            
            
        }
        
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
                        <th>Producto</th>
                        <th>Cantidad</th>                        
                        <th>Precio</th>
                        <th>Precio por linea</th>
                        <th>Eliminar</th>
                    </tr>
                   <?php 
                            
                            $i=0;
                            $precioTotal=0;
                            foreach($_SESSION['carrito'] as $codigo => $cantidad){
                                $articulo = $articulos[$codigo];
                                
                                echo '<tr>';
                                echo "<td>$articulo[nombre]</td>";
                                echo "<td><input style='width: 50px; text-align: center; background: trasparent' type='number' name='cantidad[]' value='$cantidad'></td>";
                                echo "<td>$articulo[precio]€</td>";
                                echo "<td>".$articulo['precio']*$cantidad."</td>";
                                echo "<td><input type='checkbox' id='check$i' name='borrar[]' value='$articulo[codigo]'/></td>";
                                echo '</tr>';
                                $precioTotal+= ($articulo['precio']*$cantidad);
                                $i++;
                                echo "<input type='hidden' name='cod[]' value='$codigo'/>";
                                
                            }
                    ?>
                    <tr>
                        <td colspan="3" style="text-align: right">Total:</td>
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