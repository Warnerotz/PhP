<?php
require 'lib/Mhtml.php';
?>
<h2>Comentarios</h2>
<form class='fsearch' >
	<input name='buscar'  value='<?=$buscar?>'><input class='btn btn-success' type='submit' value='Buscar'>
</form>
<a href='create.php' class='btn btn-primary'>Alta</a>

<br>&nbsp; 
<form action="cambiagenero.php" method="post">

<?php

foreach($entradas as $entrada){
    printf("<div><p>%s</p><p>%s</p><p>%s</p></div>",$entrada['fecha_hora'],$entrada['texto'],$entrada['nombre']);
}
printf("(%d/%d)",$inicio+1,$inicio+$totalpag);
if($pag>1) echo "<div><a class='btn btn-info btn-sm' href='?buscar=$buscar&pag=".($pag-1)."'>&lt;Anterior</a></div>";
echo "&nbsp; <div><a class='btn btn-info btn-sm' href=?buscar=$buscar&pag=".($pag+1).">Siguiente&gt;</a></di>";
?>
<input type=submit value="Cambiar" class='btn btn-primary '>
</form>

