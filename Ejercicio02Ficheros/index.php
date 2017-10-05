<?php

if (isset($_FILES['fichero'])) {
    if ($_FILES['fichero']['error']) {
        die("Error al subir el fichero");
    } else {
        $texto = file_get_contents($_FILES['fichero']['tmp_name']);
        //Convierte las mayúsculas con tildes a minúsculas
        $texto = mb_strtolower($texto, 'UTF-8');
        
        $palabras = preg_split('/[;,:\[\“\”\"()¿?!¡\—.«»\s]+/u', $texto, -1, PREG_SPLIT_NO_EMPTY);
        //Trata las palabras separadas en dos lineas con un "-" como una única palabra
        $palabras = preg_replace('/-/', "", $palabras);
        //var_dump($palabras);
        //cuenta las ocurrencias y las ordena descendente
        $salida = array_count_values($palabras);
        
        arsort($salida);
    }
}
?>

<html>
    <meta charset="utf-8" />
    <style>

        body {
            text-align: center;
            font-family: Lucida Sans Unicode;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td {
            border: chocolate 4px solid;
            padding: 5px;
        }

        .num {
            text-align: center;
        }

    </style>
    <head>
        <meta charset="UTF-8">
        <title>Contador de Palabras. Ejercicio 02</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            Fichero: <input type="file" name="fichero">
            <input type="submit" name="enviar" value="subir">
        </form>
        <table>
            <?php
            if (isset($salida)) {
                echo '<th>Palabra</th>
                <th>Repeticiones</th>';
                foreach ($salida as $indice => $valor) {
                    echo "<tr><td>$indice</td><td class='num'>$valor</td></tr>";
                }
            }
            ?>
        </table>
    </body>
</html>