<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM almacen WHERE clave LIKE '%$dato%' OR descripcion LIKE '%$dato%' ORDER BY id_entrada ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Clave</th>
				<th width="150">Fecha Registro</th>
                <th width="200">Entrada</th>
                <th width="150">Descripcion</th>
                <th width="150">Cantidad</th>
                <th width="150">Unidades</th>
                <th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['clave'].'</td>
				<td>'.fechaNormal($registro2['fecha_ing']).'</td>
				<td>'.$registro2['entrada'].'</td>
				<td>'.$registro2['descripcion'].'</td>
				<td>'.$registro2['cantidad'].'</td>
				<td>'.$registro2['unidades'].'</td>
				<td><a href="javascript:editarProducto('.$registro2['id_entrada'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_entrada'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>