<?php
include('conexion1.php');
	$No_expediente=$_REQUEST['No_expediente'];
	
	$query="DELETE FROM datos_del_paciente WHERE No_expediente='$No_expediente'";
	$resultado= $conexion -> query($query);
	
	if($resultado){
		header("Location: E_index_inicio.php");
	}else{
		echo "Eliminación no exitosa";
	}

?>