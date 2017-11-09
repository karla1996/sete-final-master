<?php
error_reporting(0);
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('setel', $conexion);

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}
?>