<?php
/** Listado de títulos. Se muestran en bloques de $totpag
 * Parámetros opcionales: 
 * pag = Número de página a listar
 * buscar = titulo a buscar (puede ser parcial)
 */
require 'init.php';

$pag=getparam('pag',1);
$buscar=getparam('buscar','');
if($buscar){
	$where=" and t.titulo like '%$buscar%'";
} else
	$where='';


$totalpag=4; //elementos por página
$inicio=($pag-1)*$totalpag+0;
/*
$sql = "SELECT t.*,a.nombre autor,c.nombre categoria "
		. "from titulos t,autores a,categorias c where a.id=autor_id and c.id=categoria_id"
		. "$where order by titulo "
		. "LIMIT $inicio,$totalpag";  
*/

$sql = "SELECT c.*, u.nombre FROM entradas c $where INNER JOIN usuarios u ON u.id= c.usuarios_id LIMIT $inicio, $totalpag";

if (!$resultado = $db->query($sql)) dbdie($db);

if ($resultado->rowCount() === 0) {
    termina( "No hay datos...");
}

$entradas=$resultado->fetchAll();
$vista='index';
require 'Vistas/layout.php';
