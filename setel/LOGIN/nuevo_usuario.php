
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

<?php
	 require_once "scripts.php";
	 ?>


</head>
<body  style="background-color:#E2EBF9    ;">

<div class="container">
<?php

include("include/header.php");

?>


   


	<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				
				<!---------------------------------------------------------->
				<div class="form-group">
					<label for="nombre" class="col-sm-1 control-label">Nombre</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required onkeyup="saltar(event,'edad')">
					</div>
					
					<label for="edad" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" required onkeyup="saltar(event,'domicilio')">
					</div>
					<label for="domicilio" class="col-sm-1 control-label">Domicilio</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="domicilio" name="domicilio"required placeholder="Domicilio" 
						onkeyup="saltar(event,'telefono')">
					</div>
				</div>
				<!---------------------------------------------------------------->
				
				<div class="form-group">
					
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-2">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  onkeyup="saltar(event,'turno')">
					</div>
					<label for="departamento" class="col-sm-2 control-label">Departamento</label>
					<div class="col-sm-2">
						<input type="departamento" class="form-control" id="departamento" name="departamento"  placeholder="Enfermeria" readonly="readonly">
					</div>
					
					<label for="servicio" class="col-sm-2 control-label">Servicio</label>
					<div class="col-sm-2">
						<input type="servicio" class="form-control" id="servicio" name="servicio" required placeholder="Hospitalizacion" readonly="readonly">
					</div>	
				</div>
				<!---------------------------------------------------------------------->
				
				<div class="form-group">
						
				
					<label for="turno" class="col-sm-2 control-label"required>Turno</label>
					<div class="col-sm-2">
						<select class="form-control" id="turno" name="turno"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="matutino">Matutino</option>
							<option value="vespertino">Vespertino</option>
							<option value="noct1">Nocturno 1</option>
							<option value="noct2">Nocturno 2</option>
						</select>
					</div>
					<label for="vigencia" class="col-sm-1 control-label">Vigencia</label>
					<div class="col col-lg-2">
						<input type="text" class="form-control" id="datepicker"   required name="inicio" onkeyup="saltar(event,'datepicker_final')">
					</div>
					<div class="col col-lg-2">
						<input type="text" class="form-control" id="datepicker_final"  required name="final" onkeyup="saltar(event,'ingreso')" >
					</div>
				</div>
				<!---------------------------------------------------------------------->
				
				<div class="form-group">					
					<label for="ingreso" class="col-sm-2 control-label">Fecha de ingreso</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="ingreso" name="ingreso" required onkeyup="saltar(event,'categoria')">
					</div>				
					<label for="categoria" class="col-sm-1 control-label">Categoria</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="categoria" name="categoria"  required placeholder="Categoria" onkeyup="saltar(event,'codigo')">
					</div>
					<label for="codigo" class="col-sm-2 control-label">Codigo Funcional</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="codigo" name="codigo" required placeholder="Codigo" onkeyup="saltar(event,'contrato')">
					</div>
				</div>
				<!---------------------------------------------------------------------->
				
					<div class="form-group">
					<label for="contrato" class="col-sm-2 control-label">Tipo de contrato</label>
					<div class="col-sm-2">
						<select class="form-control" id="contrato" name="contrato" required>
							<option value="SOLTERO">Seleccionar</option>
							<option value="SOLTERO">Base</option>
							<option value="CASADO">SP</option>
							<option value="OTRO">Regularizado</option>
							<option value="SOLTERO">Formalizado</option>
							<option value="CASADO">Contrato Estatal</option>
						</select>
					</div>
					<label for="onomastico" class="col-sm-1 control-label">Onomastico</label>
					<div class="col-sm-2">
						<input type="tel" class="form-control" id="onomastico" name="onomastico" required placeholder="Onomastico" onkeyup="saltar(event,'email')">
					</div>
				
					<label for="email" class="col-sm-1 control-label">Email</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="email" name="email" required  placeholder="Email" onkeyup="saltar(event,'rfc')">
					</div>
				</div>
				
					<div class="form-group">
					<label for="rfc" class="col-sm-2 control-label">RFC</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="rfc" name="rfc"required placeholder="RFC" onkeyup="saltar(event,'vacaciones')">
					</div>
				</div>
				<!-------------------------------------------------------------------------------------------------------->
				
					<div class=" col-sm-3">
						<a href="nuevo_usuario.php" class="btn btn-default">Regresar</a>
						<input type="submit" class="button success" value="AGREGAR" />
                    </div>
				</div>
		</div>
		
	
</body>

</html>

