<!DOCTYPE HTML>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
	 require_once "scripts.php";
	 ?>


</head>
<body  style="background-color:#E2EBF9    ;">


   


	<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			
			<form class="form-horizontal" method="POST" action="guardar_productividad.php" autocomplete="off">
				
				<!---------------------------------------------------------->
				<div class="form-group">
					<label for="turno" class="col-sm-2 control-label"required>Vacaciones</label>
					<div class="col-sm-2">
						<select class="form-control" id="vacaciones" name="vacaciones"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="1periodo">1 periodo</option>
							<option value="2periodo">2 periodo</option>
							<option value="riesgo">Riesgo</option>
						</select>
					</div>

					<label for="edad" class="col-sm-1 control-label">Onomastico</label>
					<div class="col-sm-1"><input type="radio" name="onomastico" id="onomastico" >
					</div>

					<label for="turno" class="col-sm-1 control-label"required>Incapacidad</label>
					<div class="col-sm-3">
						<select class="form-control" id="incapacidad" name="incapacidad"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="gravidez">Por Gravidez</option>
							<option value="accidente">Accidente de Trabajo</option>
							<option value="maternos">Cuidados Maternos</option>
							<option value="medica">Medica</option>

						</select>
					</div>

					<label for="edad" class="col-sm-1 control-label">Permisos Economicos</label>
					<div class="col-sm-1"><input type="radio" name="economicos" id="economicos" >
					</div>
				</div>
				<!---------------------------------------------------------------->
				
				<div class="form-group">
					
					<label for="turno" class="col-sm-2 control-label"required>Falta</label>
					<div class="col-sm-2">
						<select class="form-control" id="falta" name="falta"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="injustificada">Injustificada</option>
							<option value="Justificada">Justificada</option>
						</select>
					</div>


					<label for="turno" class="col-sm-2 control-label"required>Pago de Guardia</label>
					<div class="col-sm-3">
						<select class="form-control" id="guardia" name="guardia"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="extraordinario">Por Tiempo Extraordinario</option>
							<option value="festivos">Dias Festivos</option>
						</select>
					</div>

					<label for="turno" class="col-sm-1 control-label"required>Suplencias</label>
					<div class="col-sm-2">
						<select class="form-control" id="suplencia" name="suplencia"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="tiempo">Por Tiempo</option>
							<option value="economica">Economica</option>
						</select>
					</div>
	
				</div>
				<!---------------------------------------------------------------------->
				
				<div class="form-group">
						
				<label for="turno" class="col-sm-2 control-label"required>Comision</label>
					<div class="col-sm-2">
						<select class="form-control" id="comision" name="comision"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="sindical">sindical</option>
							<option value="oficial">oficial</option>
							<option value="cursos">cursos</option>
						</select>
					</div>

					<label for="turno" class="col-sm-2 control-label"required>Horas</label>
					<div class="col-sm-2">
						<select class="form-control" id="horas" name="horas"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="guarderia">Guarderia</option>
							<option value="lactancia">Lactancia</option>
						</select>
					</div>

					<label for="edad" class="col-sm-2 control-label">Pases de Salida</label>
					<div class="col-sm-1"><input type="radio" name="salida" id="salida" >
					</div>



				</div>
				<!---------------------------------------------------------------------->
				
				<div class="form-group">					
					<label for="turno" class="col-sm-2 control-label"required>Omision</label>
					<div class="col-sm-2">
						<select class="form-control" id="Omision" name="Omision"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="entrada">De entrada</option>
							<option value="salida">De salida</option>
						</select>
					</div>

					<label for="turno" class="col-sm-1 control-label"required>Retardo</label>
					<div class="col-sm-2">
						<select class="form-control" id="retardo" name="retardo"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="menor">Menor</option>
							<option value="mayor">Mayor</option>
						</select>
					</div>
					<label for="turno" class="col-sm-2 control-label"required>Licencias</label>
					<div class="col-sm-3">
						<select class="form-control" id="licencias" name="licencias"  required onKeypress="if (event.keyCode == 13) event.returnValue = false;" >
						<option Selected  required>Seleccionar...</option>
							<option value="con">Con goce de sueldo</option>
							<option value="sin">Sin goce de sueldo</option>
							<option value="matrimonio">Por matrimonio</option>
							<option value="beca">Por beca</option>
						</select>
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
<?php
	 include("footer.php");
	 ?>
</html>