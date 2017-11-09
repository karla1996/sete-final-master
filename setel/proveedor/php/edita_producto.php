<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM proveedores WHERE id_proveedor= '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nombre'], 
				1 => $valores2['telefono'], 
			
				);
echo json_encode($datos);
?>