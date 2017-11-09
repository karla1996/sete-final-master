<?php
	
	require('connect_db.php');
	$conexion=conexion();

	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 0;
	$edad = isset($_POST['edad']) ? $_POST['edad'] : 0;
	$domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : 0;
	$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : 0;
	$departamento = isset($_POST['departamento']) ? $_POST['departamento'] : 0;
	$servicio = isset($_POST['servicio']) ? $_POST['servicio'] : 0;
	$turno =isset($_POST['turno']) ? $_POST['turno'] : 0;
	$inicio = isset($_POST['inicio']) ? $_POST['inicio'] : 0;
	$final = isset($_POST['final']) ? $_POST['final'] : 0;
	$ingreso = isset($_POST['ingreso']) ? $_POST['ingreso'] : 0;
	$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : 0;
	$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : 0;
	$contrato = isset($_POST['contrato']) ? $_POST['contrato'] : 0;
	$onomastico = isset($_POST['onomastico']) ? $_POST['onomastico'] : 0;
	$email =isset($_POST['email']) ? $_POST['email'] : 0;
	$rfc = isset($_POST['rfc']) ? $_POST['rfc'] : 0;
	 
	 
	 $sql="INSERT INTO enfermeria (nombre,edad,domicilio,telefono,departamento,servicio,turno,inicio,final,ingreso,categoria,codigo,contrato,onomastico,email,rfc) VALUES ('$nombre', '$edad', '$domicilio','$telefono', 'Enfermeria','Hospitalización','$turno','$inicio', '$final','$ingreso','$categoria','$codigo', '$contrato','$onomastico','$email', '$rfc')";

		echo $result=mysqli_query($conexion, $sql);
?>


<!DOCTYPE HTML>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
	
</head>
<body  style="background-color:#E2EBF9    ;">

	<div class="container">
	<div class="row">
	<?php if($result){?>
	<h3>Registro Guardado</h3>
	<?php }else{?>
	<h3>Error al Guardar</h3>
	<?php } ?>
	
	<a href="nuevo_usuario.php" class="btn btn-primary">Regresar</a>
	
	</div>
				</div>
		
	
</body>
</html>
