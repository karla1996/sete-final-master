<?php
	
require('php/conexion.php');
	$conexion=conexion();
	
	$vacaciones = isset($_POST['vacaciones']) ? $_POST['vacaciones'] : 0;
	$onomastico = isset($_POST['onomastico']) ? $_POST['onomastico'] : 0;
	$incapacidad = isset($_POST['incapacidad']) ? $_POST['incapacidad'] : 0;
	$economicos = isset($_POST['economicos']) ? $_POST['economicos'] : 0;
	$falta = isset($_POST['falta']) ? $_POST['falta'] : 0;
	$guardia = isset($_POST['guardia']) ? $_POST['guardia'] : 0;
	$suplencia =isset($_POST['suplencia']) ? $_POST['suplencia'] : 0;
	$comision = isset($_POST['comision']) ? $_POST['comision'] : 0;
	$horas = isset($_POST['horas']) ? $_POST['horas'] : 0;
	$salida = isset($_POST['salida']) ? $_POST['salida'] : 0;
	$omision = isset($_POST['omision']) ? $_POST['omision'] : 0;
	$retardo = isset($_POST['retardo']) ? $_POST['retardo'] : 0;
	$licencias = isset($_POST['licencias']) ? $_POST['licencias'] : 0;
	 
	 
	 $sql="INSERT INTO productividad(vacaciones, onomastico, incapacidad, economicos, falta, guardia, suplencia, comision, horas, salida,omision, retardo, licencias) VALUES  ('$vacaciones', '$onomastico', '$incapacidad','$economicos', '$falta','$guardia','$suplencia','$comision', '$horas','$salida','$omision','$retardo','$licencias')";
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
	
	<a href="productividad.php" class="btn btn-primary">Regresar</a>
	
	</div>
				</div>
		
	
</body>
</html>
