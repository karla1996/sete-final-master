<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SETEL</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<!-- Tabla -->
	<link href="assets/css/datagrid.css" rel="stylesheet"/>
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></i>SETEL</a>
        </div>
                

            </div>
        </div>
<?php	 
		
		$id=$_REQUEST['id'];
			include ("conexion1.php");
			$query="SELECT * FROM datos_del_paciente WHERE id='$id'";
			$resultado = $conexion->query($query);
			$row=$resultado->fetch_assoc();
	 
		?>
       <form action="consultas_modificar2.php?id=<?php echo $row['id']; ?>" method="POST">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="color:#317ba0";><strong>Pacientes</strong></h2>
						<hr aling="left">
                    </div>
			<!-- Datos del paciente -->
				<div class="col-md-10"> 
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
				<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
				<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
				
	
		<div class="datagrid">
		<table>
		<thead><tr><th>Fecha Ingreso</th><th>Edad</th><th>Cama y Nombre</th><th>L. Referencia</th><th>Diagnositico</th><th colspan="2">Cuidados Especiales</th><th>Tratamieno</th><th>Condicion del Paciente</th></tr></thead>
		<tbody>		
		<tr><td> Fecha:<br/> <input type="text" name="fecha" size="10" REQUIREO placeholder="Fecha ingreso...." value="<?php echo $row['fecha_ingreso'];?>"/></td>
		<td>Edad: <br><input type="text" name="edad" size="4" REQUIREO placeholder="Edad...." value="<?php echo $row['Edad'];?>"/> </td>
		<td>Cama: <br><input type="text" name="cama" size="8" REQUIREO placeholder="Cama...." value="<?php echo $row['nocama'];?>"/> </br> 
		Nombre:</br><input type="text" name="nombre" size="8" REQUIREO placeholder="Nombre...." value="<?php echo $row['Nombre'];?>"/><br>
		No SPP </br><input type="text" name="num_spp" size="8" REQUIREO placeholder="No SPP...." value="<?php echo $row['No_SPP'];?>"/></td>
		<td>L. Referencia <br/><input type="text" name="lu_ref" size="10" REQUIREO placeholder="Lug. Referencia..."value="<?php echo $row['l_referencia'];?>"/></td>
		<td>Diagnostico <br/> <input type="text" name="diagno1" size="10" REQUIREO placeholder="Diagnositico..." value="<?php echo $row['Diagnostico'];?>"/></br>
		Dias Post evento <input type="text" name="dia_post" size="5" REQUIREO placeholder="Dias Post evento...." value="<?php echo $row['dia_post'];?>"/> </br>
		Dias de estancia<input type="text" name="dia_estancia" size="5" REQUIREO placeholder="Dias estancia...." value="<?php echo $row['dia_estancia'];?>"/></td> 
		<td>TA <input type="text" name="TA1" size="5" REQUIREO placeholder="TA...." value="<?php echo $row['ta1'];?>"/> 
		<input type="text" name="TA2" size="5" REQUIREO placeholder="TA...." value="<?php echo $row['ta2'];?>"/> 
		FC <input type="text" name="FC" size="5" REQUIREO placeholder="FC...." value="<?php echo $row['fc'];?>"/>
		FR <input type="text" name="FR" size="5" REQUIREO placeholder="FR...." value="<?php echo $row['fr'];?>"/></br>
		TEM <input type="text" name="TEM" size="5" REQUIREO placeholder="TEM...." value="<?php echo $row['tem'];?>"/>
		PVC <input type="text" name="PVC" size="5" REQUIREO placeholder="PVC...." value="<?php echo $row['pvc'];?>"/>
		GLUC<input type="text" name="gluc" size="5" REQUIREO placeholder="SO2...." value="<?php echo $row['so2'];?>"/></br>
		TISS <input type="text" name="TISS" size="5" REQUIREO placeholder="TISS...." value="<?php echo $row['tiss'];?>"/> </br>
		UI <input type="text" name="UI" size="5" REQUIREO placeholder="UI...." value="<?php echo $row['ui'];?>"/></td>
		<td>GLASGOW <input type="text" name="GLASGOW" size="5" REQUIREO placeholder="GLASGOW...." value="<?php echo $row['glasgow'];?>"/> </br>
		RASS <input type="text" name="RASS" size="5" REQUIREO placeholder="RASS...." value="<?php echo $row['rass'];?>"/></br>
		RAMSAY <input type="text" name="RAMSAY" size="5" REQUIREO placeholder="RAMSAY...." value="<?php echo $row['ramsay'];?>"/></td>
		<td>ANTIB <input type="text" name="ANTIB": size="8" REQUIREO placeholder="ANTIB...." value="<?php echo $row['ant1'];?>" value="<?php echo $row['dia1'];?>" value="<?php echo $row['ant2'];?>" value="<?php echo $row['dia2'];?>" value="<?php echo $row['ant3'];?>" value="<?php echo $row['dia3'];?>" value="<?php echo $row['ant4'];?>" value="<?php echo $row['dia4'];?>" value="<?php echo $row['ant5'];?>" value="<?php echo $row['dia5'];?>"/></br>
		LSPS <input type="text" name="LSPS" size="8" REQUIREO placeholder="LSPS...." value="<?php echo $row['lsps'];?>"/></br>
	    Sedacion <input type="text" name="sedacion" size="8" REQUIREO placeholder="sedacion...." value="<?php echo $row['sedacion'];?>"/></br>
		Dieta <input type="text" name="dieta" size="5" REQUIREO placeholder="Dieta...." value="<?php echo $row['dieta']; echo $row['ayuno'];?>"/></td>
		<td>Conocimiento <br/> <input type="text" name="con_paciente" size="10" REQUIREO placeholder="Con_paciente...." value="<?php echo $row['con_paciente'];?>"/></td>
		</tbody>
		</table>
		</div>
	
    <input type="submit" value="Guardar" >
	
	</form>
	
</div>
</body>
</html>
