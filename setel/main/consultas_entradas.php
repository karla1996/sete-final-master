<?php
require_once('conexion.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM almacen';
	return $mysqli->query($sql);

}

function add($id_entrada, $clave, $no_factura, $no_pedido, $fecha_ing, $movimiento, $proveedor, $entrada, $descripcion, $presentacion, $cantidad, $unidades, $precio_unitario, $importe, $lote, $fecha_cad,$cantidad)
{
	header('Location: index.php');
	global $mysqli; 
	$sql = "INSERT INTO almacen (id_entrada, clave, no_factura,no_pedido,fecha_ing, movimiento, proveedor, entrada, descripcion, presentacion, cantidad, unidades, precio_unitario, importe,lote,fecha_cad,existencia) VALUES ('{$id_entrada}','{$clave}','{$no_factura}','{$no_pedido}','{$fecha_ing}', '{$movimiento}', '{$proveedor}','{$entrada}','{$descripcion}','{$presentacion}','{$cantidad}', '{$unidades}', '{$precio_unitario}','{$importe}', '{$lote}', '{$fecha_cad}','{$cantidad}');";
	echo $sql;
	 
	$mysqli->query($sql);
	
}

function update($id_entrada, $clave, $no_factura, $no_pedido, $fecha_ing, $movimiento, $proveedor, $entrada, $descripcion, $presentacion, $cantidad, $unidades, $precio_unitario, $importe, $lote, $fecha_cad)
{
	global $mysqli;
	$sql = "UPDATE almacen SET id_entrada='{$id_entrada}', no_factura='{$no_factura}', no_pedido='${no_pedido}', fecha_ing='{$fecha_ing}', movimiento='{$movimiento}', proveedor='{$proveedor}', entrada='{$entrada}',descripcion='{$descripcion}', presentacion='{$presentacion}', cantidad='{$cantidad}', unidades='{$unidades}', precio_unitario='{$precio_unitario}', importe='{$importe}', lote='{$lote}', fecha_cad='{$fecha_cad}'  WHERE clave={$clave}";
	echo $sql;
	$mysqli->query($sql);	
}
function delete( $id_entrada )
{
	global $mysqli;
	$sql = "DELETE FROM almacen WHERE id_entrada = {$id_entrada}";
	$mysqli->query($sql);
}

function get_user_by_id_entrada( $id_entrada )
{
	global $mysqli;
	$sql = "SELECT * FROM almacen WHERE id_entrada = {$id_entrada}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;

}
?>