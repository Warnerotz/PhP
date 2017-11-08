<?php
    require 'banner.php';
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>carrito</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

        <style>
            *{
                padding: 0;
                margin: 0;
            }
            a{
                text-decoration: none;
                
            }
            header{
                height: 100px;
                background-color: aquamarine;
                text-align: center;
                
            }
            
            #banner1{                
                width: 15%;
                background-color: orange;
                float:left;
                height: 100%;
            }
            #banner2{
                
                width: 15%;
                background-color: orange;
                float:left;
                height: 100%;
            }
            
            #contenido{
                background-color: gainsboro;
                width: 70%;
                float:left;
                height: 100%;
            }
            
        </style>
    </head>
    <body>
        <header>
            <h1>EXAMEN PRIMERA EVALUACION</h1>
        </header>
        <div id="banner1">
            <?php getbanner() ?>
        </div>
        <div id="contenido">
            asdfohiwufioqwpgbfqgbqeipugbqiepurgbqieupbg
        </div>
        <div id="banner2">
            <?php getbanner() ?>
        </div>
    </body>

</html>
