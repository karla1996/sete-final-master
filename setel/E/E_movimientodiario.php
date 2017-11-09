<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script> 
function pulsar(e) { 
  tecla = (document.all) ? e.keyCode :e.which; 
  return (tecla!=13); 
} 
function copiar()
		{
			document.getElementById("noexpediente").value=document.getElementById("nu_expediente").value;
		}
		function copiar2()
		{
			document.getElementById("so2vo").value=document.getElementById("so2").value;
		}
</script>


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
	<link rel="stylesheet" type="text/css" href="<?php
  	date_default_timezone_set('America/Mexico_City');
$hour = date("H");
$minute = date("i");
if ($hour < 9) echo "datagrid_m.css";
else if ($hour < 14 ) echo "datagrid_t.css";
else echo "datagrid_n.css";
?>"
/>
</head>
<!-- Barra  -->
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
                <!-- Menú desplegable -->
				<ul class="des">
					<li><a href="">Salir</a></li>
					<li><a href="">Enfemería</a>
						<ul>
							<li><a href="E_index_inicio.php">Movimiento diario de pacientes</a></li>
							<li><a href="E_index2.php">Informe de pacientes</a></li>
							<li><a href="E_InfoPacientes.php">Datos de pacientes</a></li>
						</ul>
					</li>
					
				</ul>

            </div>
        </div>
		</div>
        <!-- /. NAV TOP (Opciones del menu) -->
        <!-- /. NAV SIDE Título  -->
						<div class="col-md-9">
						<br><br>
                        <h2 style="color:#317ba0";><strong>&nbsp;&nbsp;INFORMACIÓN DE PACIENTES</strong></h2>
						<hr aling="left">
						</div>
                    
			<!-- Datos del paciente -->
			
			
				<div class="col-md-10"> 
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
				<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
				<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
				<form action="E_movimientodiario.php" method="post">
				&nbsp;NÚMERO DE EXPEDIENTE: <input type="text" name="nu_expediente" id="nu_expediente" onkeyup="copiar()" onkeypress="return pulsar(event)"/> <input type="submit" name="btnbuscar" value="BUSCAR"/><br><br>
				</form>
				
				<!--BUSCAR DATOS -->
<?php

$exp=$_POST['nu_expediente'];


$link = mysqli_connect("localhost", "root", "", "medicos")
	or die ("ERROR EN LA CONEXIÓN");
//Query de consulta	
$sql = "SELECT Nombre, Edad, Sexo,Diagnostico, l_referencia, fecha_ingreso, dia_evento, F_nacimiento, No_expediente, No_SPP FROM Datos_del_paciente where No_expediente= '$exp'";
//Imprimir archivos
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
    	while($row = mysqli_fetch_array($result)){
		    /*DATOS GENERALES*/
			$n_expediente=$row['No_expediente'];
			/* DATOS DEL PACIENTE */
			$nombre_pa=$row['Nombre'];
			$edad=$row['Edad'];
			$sexo=$row['Sexo'];
			$diagnostico=$row['Diagnostico'];
			$lugar_referencia=$row['l_referencia'];
			$fecha_ingreso=$row['fecha_ingreso'];
			$fecha_evento=$row['dia_evento'];
			$fecha_nacimiento=$row['F_nacimiento'];
			$numero_seguro=$row['No_SPP'];
			
			}
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
			
?>				
				
				<form action="procesa.php" method="post" >
				&nbsp;ID DE ENFERMERO: <input type="text" name="idenfermero" id="idenfermero" onkeyup="saltar(event,'fecha')" value="" size="7"onkeypress="return pulsar(event)"/> 
				&nbsp;FECHA: <input readonly="readonly" type="text" name="fecha" id="fecha" onkeyup="saltar(event,'turno')" value="<?php echo date("Y-n-j"); ?>" required size="7"onkeypress="return pulsar(event)"/> 
				&nbsp;TURNO: <select name="turno"><option value="tma">MAÑANA</option><option value="ttarde">TARDE</option><option value="tnoche">NOCHE</option></select><br><br>
				&nbsp;TIPO DE PACIENTE: <select id="paciente"name="tipo_paciente"><option value="pediatria">PEDIATRIA</option><option value="adulto">ADULTOS</option></select> 
				&nbsp;<select name="unidad"><option value="uci">UCI</option><option value="uquemados">U. QUEMADOS</option></select>
				&nbsp;CAMA: <input type="text" name="cama" id="cama" onkeyup="saltar(event,'nombre')" size="1"onkeypress="return pulsar(event)"/> <br> <br>
				
	<!-- Tabla de información -->
		<div class="datagrid">
		<table style="margin: 0 auto;">
		<thead><tr><th>DATOS DEL PACIENTE</th><th>ESTADO HEMODINAMICO</th><th>ESTADO NEUROLÓGICO</th><th>VENTILACIÓN/OXÍGENO</th><th>LÍQUIDOS PARENTALES</th><th>LAB</th><th>RX</th><th>HEMODERIVADOS</th><th>OBSERVACIONES</th></tr></thead>
		
		<tbody><td>NOMBRE <textarea name="nombre"id="nombre"onkeyup="saltar(event,'edad')"onkeypress="return pulsar(event)"><?php echo "$nombre_pa"?></textarea></td><td>TA<input type="text" size="1"name="ta1"id="ta1"onkeyup="saltar(event,'ta2')"onkeypress="return pulsar(event)"/> <input type="text" size="1px"name="ta2"id="ta2"onkeyup="saltar(event,'pam')"onkeypress="return pulsar(event)"/></td><td>GLASGOW <input type="text"size="2"name="glasgow"id="glasgow"onkeyup="saltar(event,'rass')"onkeypress="return pulsar(event)"/></td><td>VM <input type="text"size="4"name="vm"id="vm"onkeyup="saltar(event,'mv')"onkeypress="return pulsar(event)"/></td><td>LSPS<input type="text"size="6"name="lsps"id="lsps"onkeyup="saltar(event,'aminas')"onkeypress="return pulsar(event)"/></td><td>BH <input type="checkbox" name="bh" value="1" id="bh"onkeyup="saltar(event,'qs')"onkeypress="return pulsar(event)"/></td><td><input type="checkbox" name="rx" value="9"id="rx"onkeyup="saltar(event,'pg1')"onkeypress="return pulsar(event)"/></td><td>
		
		<!-- Tabla de hemoderivados -->
		<table>
		<tr><th>CEEC</th><th>&nbsp;&nbsp;HGS</th>
		</table></td><td><!--Conclusiones --> 
		<textarea name="observaciones" id="observaciones" cols="22" rows="7" wrap="VIRTUAL"></textarea></td></tr>
		<tr class="alt"><td>EDAD <input type="text"name="edad"id="edad"onkeyup="saltar(event,'sexo')" onkeypress="return pulsar(event)" size="1"value="<?php echo "$edad"?>"/></td><td>PAM <input type="text" size="2"id="pam"name="pam"onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)"/></td><td>RASS <input type="text"size="2" name="rass" id="rass"onkeyup="saltar(event,'ramsay')"onkeypress="return pulsar(event)"/></td><td>MV <select name="mv"><option value="pn">PN</option><option value="tf">TF</option><option value="ner">NEB</option><option value="pizt">PIZ T</option><option name="masu">MAS U</option><option name="cpap">CPAP</option><option name="psimv">P/SIMV</option><option name="pac">P/AC</option><option name="prucb">PRUC B</option><option name="ps">PS</option></select></td><td>AMINAS<input type="text" size="6"name="aminas"id="aminas"onkeyup="saltar(event,'sedacion')"onkeypress="return pulsar(event)"/></td><td>QS <input type="checkbox" name="qs" value="2"id="qs"onkeyup="saltar(event,'elts')"onkeypress="return pulsar(event)"/></td><td></td><td><table><tr><th>PG</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG</th></tr></table></td></tr>
		<tr><td>SEXO <input type="tex" name="sexo" id="sexo"onkeyup="saltar(event,'diagnostico')"onkeypress="return pulsar(event)"onkeypress="return pulsar(event)" value="<?php echo "$sexo"?>"/></td><td>FC <input type="text" size="2"name="fc"id="fc"onkeyup="saltar(event,'so2')"onkeypress="return pulsar(event)"/></td><td>RAMSAY <input type="text"size="2" name="ramsay" id="ramsay"onkeyup="saltar(event,'braden')"onkeypress="return pulsar(event)"/></td><td>FiO2% <input type="text"size="4"name="fio2"id="fio2"onkeyup="saltar(event,'so2vo')"onkeypress="return pulsar(event)"/></td><td>SEDACION<input type="text" size="6"name="sedacion"id="sedacion"onkeyup="saltar(event,'sv')"onkeypress="return pulsar(event)"/></td><td>ELTS <input type="checkbox" name="elts" value="3"id="elts"onkeyup="saltar(event,'tp')"onkeypress="return pulsar(event)"/></td><td></td><td><table><tr><td><input type="text" size="1" name="pg1" id="pg1"onkeyup="saltar(event,'pg2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="pg2" id="pg2"onkeyup="saltar(event,'pfc1')"onkeypress="return pulsar(event)"/></td></tr></table></td></tr>
		<tr class="alt"><td>DIAGNÓSTICO <textarea name="diagnostico"id="diagnostico"onkeyup="saltar(event,'lreferencia')"onkeypress="return pulsar(event)"><?php echo "$diagnostico"?></textarea></td><td>SO2 <input type="text"size="2"name="so2"id="so2"  onkeyup="copiar2()"onkeypress="return pulsar(event)"/></td><td>BRADEN <input type="text"size="2" name="braden" id="braden"onkeyup="saltar(event,'crichton')"onkeypress="return pulsar(event)"/></td><td>SO2 <input type="text"size="4" name="so2vo" id="so2vo"onkeyup="saltar(event,'antb1')"onkeypress="return pulsar(event)"/></td><td><table><th>S/D</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F.I.</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC</th></table></td><td>TP&nbsp;&nbsp;<input type="checkbox" name="tp" value="4"id="tp"onkeyup="saltar(event,'tpt')"onkeypress="return pulsar(event)"/></td><td></td><td><table><th>PFC</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PFC</th></table></td></tr>
		<tr><td>L. REFERENCIA <input type="text"name="lreferencia"id="lreferencia"onkeyup="saltar(event,'ingreso')"onkeypress="return pulsar(event)"value="<?php echo "$lugar_referencia"?>"/></td><td>FR <input type="text"size="2"name="fr"id="fr"onkeyup="saltar(event,'tem')"onkeypress="return pulsar(event)"/></td><td>CRICHTON <input type="text"size="2"name="crichton"id="crichton"onkeyup="saltar(event,'tiss')"onkeypress="return pulsar(event)"/></td>
		<!-- Tabla antibióticos -->
		<td>
		<table>
		<tr><th>ANTIBIÓTICOS</th><th>&nbsp;&nbsp;&nbsp;&nbsp;DÍAS</th></tr>
		</table>
		<td><table><td>S.V&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sv" value="1" id="sv"onkeyup="saltar(event,'sng')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi" id="fi" onkeyup="saltar(event,'fi2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc1" id="fc1"onkeyup="saltar(event,'fc2')"onkeypress="return pulsar(event)"/></td></table></td><td>TPT<input type="checkbox" name="tpt" value="5"id="tpt"onkeyup="saltar(event,'cpk')"onkeypress="return pulsar(event)"/><td></td><td><table><td><input type="text" size="1" name="pfc1" id="pfc1"onkeyup="saltar(event,'pfc2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="pfc2" id="pfc2"onkeyup="saltar(event,'cp1')"onkeypress="return pulsar(event)"/></td></table></td></td>
		</td></tr>
		<tr class="alt"><td>FECHA DE INGRESO <input type="date"name="ingreso"id="ingreso"onkeyup="saltar(event,'evento')"onkeypress="return pulsar(event)"value="<?php echo "$fecha_ingreso"?>"/></td><td>TEM <input type="text"size="2"name="tem"id="tem"onkeyup="saltar(event,'pvc')"onkeypress="return pulsar(event)"/></td><td>TISS <input type="text"size="2" name="tiss" id="tiss"onkeyup="saltar(event,'clase')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb1" id="antb1"onkeyup="saltar(event,'dia1')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia1" id="dia1"onkeyup="saltar(event,'antb2')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>S.NG. <input type="checkbox" value="1" name="sng" id="sng" onkeyup="saltar(event,'sog')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi2" id="fi2" onkeyup="saltar(event,'fi3')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc2" id="fc2" onkeyup="saltar(event,'fc3')"onkeypress="return pulsar(event)"/></td></table></td><td>CPK<input type="checkbox" name="cpk" value="6"id="cpk"onkeyup="saltar(event,'ego')"onkeypress="return pulsar(event)"/><td></td><td><table><th>CP</th><th>CP</th></table></td></td>
		</td></tr>
		<tr><td>DÍA DEL EVENTO <input type="date"name="evento"id="evento"onkeyup="saltar(event,'fnacimiento')"onkeypress="return pulsar(event)"value="<?php echo "$fecha_evento"?>"/></td><td>PVC <input type="text"size="2" name="pvc" id="pvc"onkeyup="saltar(event,'iu')"onkeypress="return pulsar(event)"/></td><td>CLASE <input type="text"size="2"name="clase"id="clase"onkeyup="saltar(event,'dieta')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10" name="antb2" id="antb2"onkeyup="saltar(event,'dia2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia2" id="dia2"onkeyup="saltar(event,'antb3')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>S.OG.<input type="checkbox" value="1" name="sog" id="sog"onkeyup="saltar(event,'te')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi3" id="fi3" onkeyup="saltar(event,'fi4')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc3" id="fc3" onkeyup="saltar(event,'fc4')"onkeypress="return pulsar(event)"/></td></table></td><td>EGO<input type="checkbox" name="ego" value="7"id="ego"onkeyup="saltar(event,'culti')"onkeypress="return pulsar(event)"/><td></td><td><table><td><input type="text" size="1" name="cp1" id="cp1"onkeyup="saltar(event,'cp2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="cp2" id="cp2"onkeyup="saltar(event,'observaciones')"onkeypress="return pulsar(event)"/></td></table></td></td>
		</td></tr>
		<tr class="alt"><td>FECHA DE NACIMIENTO <input type="date" name="fnacimiento"id="fnacimiento"onkeyup="saltar(event,'noexpediente')"onkeypress="return pulsar(event)"value="<?php echo "$fecha_nacimiento"?>" /></td><td>UI <input type="text"size="2" name="iu" id="iu"onkeyup="saltar(event,'dx')"onkeypress="return pulsar(event)"/></td><td><strong>Estado metabólico</strong></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb3"id="antb3"onkeyup="saltar(event,'dia3')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia3" id="dia3"onkeyup="saltar(event,'antb4')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>T.E.&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="1" name="te" id="te"onkeyup="saltar(event,'cvc')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi4" id="fi4" onkeyup="saltar(event,'fi5')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc4" id="fc4" onkeyup="saltar(event,'fc5')"onkeypress="return pulsar(event)"/></td></table></td><td>CULTI<input type="checkbox" name="culti" value="8"id="culti"onkeyup="saltar(event,'otro')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td>NO. EXPEDIENTE <input readonly="readonly" type="text"name="noexpediente"id="noexpediente"onkeyup="saltar(event,'nospp')"onkeypress="return pulsar(event)"value="<?php echo "$n_expediente"?>"/></td><td>DX <input type="text"size="2" name="dx" id="dx"onkeyup="saltar(event,'pia')"onkeypress="return pulsar(event)"/></td><td>DIETA <textarea type="text" name="dieta" id="dieta"onkeyup="saltar(event,'ayuno')"onkeypress="return pulsar(event)"></textarea></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb4"id="antb4"onkeyup="saltar(event,'dia4')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia4" id="dia4"onkeyup="saltar(event,'antb5')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>CVC&nbsp;&nbsp;<input type="checkbox" value="1" name="cvc" id="cvc" onkeyup="saltar(event,'cvp')"onkeypress="return pulsar(event)"/></td><td><input type="text" name="fi5" id="fi5" onkeyup="saltar(event,'fi6')"onkeypress="return pulsar(event)" size="1"/></td><td><input type="text" name="fc5"  id="fc5" size="1" onkeyup="saltar(event,'fc6')"onkeypress="return pulsar(event)"/></td></table></td><td>OTRO<input type="checkbox" name="otro" value="8"id="otro"onkeyup="saltar(event,'rx')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr class="alt"><td>NO. SPP <input type="text"name="nospp"id="nospp"onkeyup="saltar(event,'ta1')"onkeypress="return pulsar(event)"value="<?php echo "$numero_seguro"?>"/></td><td>PIA <input type="text"size="2" name="pia" id="pia"onkeyup="saltar(event,'glasgow')"onkeypress="return pulsar(event)"/></td><td>AYUNO <input type="text"name="ayuno" id="ayuno"onkeyup="saltar(event,'vm')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb5"id="antb5"onkeyup="saltar(event,'dia5')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia5" id="dia5"onkeyup="saltar(event,'antib')"onkeypress="return pulsar(event)"/></table><td><table><td>CVP&nbsp;<input type="checkbox" value="1" name="cvp" id="cvp" onkeyup="saltar(event,'fi')"onkeypress="return pulsar(event)"/></td><td><input type="text" name="fi6" id="fi6" size="1" onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc6" id="fc6" onkeyup="saltar(event,'bh')"onkeypress="return pulsar(event)"/></td></table></td><td></td>
		</tbody>
		</table>
		</td></tr>
		</tbody>
		</table>
		<br><br>
		
		<!-- Botón de insercción -->
		<center><input type="submit" style="font-size:20px" value="ENVIAR" name="btnguardar"id="guardar"/></center>
		<br><br>
		</form>
		</div>
		</div>
		
</body>
</html>

<script>
// Funcion que se ejecuta cada vez que se pulsa una tecla en cualquier input
// Tiene que recibir el "event" (evento generado) y el siguiente id donde poner
// el foco. Si ese id es "submit" se envia el formulario
function saltar(e,id){
	// Obtenemos la tecla pulsada
	(e.keyCode)?k=e.keyCode:k=e.which;
 
	// Si la tecla pulsada es enter (codigo ascii 13)
	if(k==13)
	{
		// Si la variable id contiene "submit" enviamos el formulario
		if(id=="submit")
		{
			document.forms[0].submit();
		}else{
			// nos posicionamos en el siguiente input
			document.getElementById(id).focus();
		}
	}
}
</script>
