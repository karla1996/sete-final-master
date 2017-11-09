<?php
include('conexion.php');
$id = $_POST['id-prod'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];

//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO proveedores (nombre, telefono)VALUES('$nombre','$tipo')");
	break;
	
	case 'Edicion':
		mysql_query("UPDATE proveedores SET nombre = '$nombre', telefono = '$tipo' WHERE id_proveedor = '$id'");
	break;
}

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM proveedores ORDER BY id_proveedor ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="50">Nombre</th>
                <th width="100">Telefono</th>
                
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombre'].'</td>
				<td>'.$registro2['telefono'].'</td>
				
				<td><a href="javascript:editarProducto('.$registro2['id_proveedor'].');" class="glyphicon glyphicon-edit"></a></td>
				</tr>';
	}
echo '</table>';
?>