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
</head>
<style>
table, th, td {	
    border: 1px solid black;
    border-collapse: collapse;
	font-size: 10px;
}
body{
	font-size:12px;
	font-family: Arial; 
}
</style>
<body>
<!-- barra -->
<div style="font-size:14px;">
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
							<li><a href="E_index2">Informe de pacientes</a></li>
							<li><a href="E_InfoPacientes">Datos de pacientes</a></li>
						</ul>
					</li>
					
				</ul>

            </div>
        </div>
</div>
</div>
<!-- DATOS -->
<br><br>
<h2 style="color:#317ba0";><strong>&nbsp;&nbsp;INFORME DE MOVIMIENTO DIARIO DE PACIENTES</strong></h2>
<hr aling="left">
<form action="E_index2.php" method="post" >
<div style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;NO. EXPEDIENTE: <input name="exp_buscar" type="text" size="10"/> <input type="submit" name="btnbuscar" value="BUSCAR"></div>
<hr aling="left">
</form>
<center><strong>CENTRO ESTATAL DE CUIDADOS CRITICOS</strong></center>
<center><strong>UNIDAD DE CUIDADOS INTENSIVOS</strong></center>
<center><strong>MOVIMIENTO DIARIO DE PACIENTES EN </strong></center>
<?php

$expe_buscado = $_POST['exp_buscar'];
$tma = $_POST[''];
//echo "$expe_buscado";

$link = mysqli_connect("localhost", "root", "root", "setel")
	or die ("ERROR EN LA CONEXIÓN");


//Query de consulta	
$sql = "SELECT * FROM Datos_del_paciente where No_expediente='$expe_buscado'and turno='tma' ";
//Query de vespertino
$sql_v = "SELECT * FROM Datos_del_paciente where No_expediente='$expe_buscado' and turno='ttarde' ";
//Query de nocturbno
$sql_n = "SELECT * FROM Datos_del_paciente where No_expediente='$expe_buscado' and turno='tnoche' ";


//Imprimir archivos
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
    	while($row = mysqli_fetch_array($result)){
		    /*DATOS GENERALES*/
			$n_expediente=$row['No_expediente'];
			$id_enfermero=$row['idenfermero'];
			$fecha=$row['fecha'];
			$turno=$row['turno'];
			$paciente=$row['tipo_paciente'];
			$cama=$row['nocama'];
			$unidad=$row['unidad'];
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
			/*ESTADO HEMODINAMICO*/
			$ta_1=$row['ta1'];
			$ta_2=$row['ta2'];
			$pam=$row['pam'];
			$fc=$row['fc'];
			$so2=$row['so2'];
			$fr=$row['fr'];
			$tem=$row['tem'];
			$pvc=$row['pvc'];
			$iu=$row['ui'];
			$dx=$row['dx'];
			$pia=$row['pia'];
			/*ESTADO NEUROLOGICO*/
			$glasgow=$row['glasgow'];
			$rass=$row['rass'];
			$ramsay=$row['ramsay'];
			$braden=$row['braden'];
			$crichton=$row['crichton'];
			$tiss=$row['tiss'];
			$clase=$row['clase'];
			/*ESTADO METABOLICO*/
			$dieta=$row['dieta'];
			$ayuno=$row['ayuno'];
			/*VENTILACIÓN/OXÍGENO*/
			$vm=$row['vm'];
			$mv=$row['mv'];
			$fio2=$row['fio2'];
			$so2vo=$row['so2_2'];
			/*ANTIBIOTICOS*/
			$ant1=$row['ant1'];
			$ant2=$row['ant2'];
			$ant3=$row['ant3'];
			$ant4=$row['ant4'];
			$ant5=$row['ant5'];
			/*DÍAS*/
			$dia1=$row['dia1'];
			$dia2=$row['dia2'];
			$dia3=$row['dia3'];
			$dia4=$row['dia4'];
			$dia5=$row['dia5'];
			/*LÍQUIDOS PARENTALES*/
			$lsps=$row['lsps'];
			$aminas=$row['aminas'];
			$sedacion=$row['sedacion'];
			/*LAB*/
			$bh=$row['bh'];
			//echo "$bh";
			$qs=$row['qs'];
			$elts=$row['elts'];
			$tp=$row['tp'];
			$tpt=$row['tpt'];
			$cpk=$row['cpk'];
			$ego=$row['ego'];
			$culti=$row['culti'];
			$otro=$row['otro'];
			$rx=$row['rx'];
			/*HEMODERIVADOS*/
			$cecc_pg=$row['pg_cecc'];
			$cecc_pfc=$row['pfc_cecc'];
			$cecc_cp=$row['cp_cecc'];
			$hgs_pg=$row['pg_hgs'];
			$hgs_pfc=$row['pfc_hgs'];
			$hgs_cp=$row['cp_hgs'];
			/*OBSERVACIONES*/
			$obser=$row['observaciones'];
			/*SD*/
			$sv=$row['sv'];
			$sng=$row['sng'];
			$sog=$row['sog'];
			$te=$row['te'];
			$cvc=$row['cvc'];
			$cvp=$row['cvp'];
			/*FI*/
			$fi1=$row['fi1'];
			$fi2=$row['fi2'];
			$fi3=$row['fi3'];
			$fi4=$row['fi4'];
			$fi5=$row['fi5'];
			$fi6=$row['fi6'];
			/* FC */
			$fc1=$row['fc1'];
			$fc2=$row['fc2'];
			$fc3=$row['fc3'];
			$fc4=$row['fc4'];
			$fc5=$row['fc5'];
			$fc6=$row['fc6'];
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//Consulta tarde
//Imprimir archivos
if($result_v = mysqli_query($link, $sql_v)){
    if(mysqli_num_rows($result_v) > 0){
    	while($row_v = mysqli_fetch_array($result_v)){
		    /*DATOS GENERALES*/
			$n_expediente_v=$row_v['No_expediente'];
			$id_enfermero_v=$row_v['idenfermero'];
			$fecha_v=$row_v['fecha'];
			$turno_v=$row_v['turno'];
			$paciente_v=$row_v['tipo_paciente'];
			$cama_v=$row_v['nocama'];
			$unidad_v=$row_v['unidad'];
			/* DATOS DEL PACIENTE */
			$nombre_pa_v=$row_v['Nombre'];
			$edad_v=$row_v['Edad'];
			$sexo_v=$row_v['Sexo'];
			$diagnostico_v=$row_v['Diagnostico'];
			$lugar_referencia_v=$row_v['l_referencia'];
			$fecha_ingreso_v=$row_v['fecha_ingreso'];
			$fecha_evento_v=$row_v['dia_evento'];
			$fecha_nacimiento_v=$row_v['F_nacimiento'];
			$numero_seguro_v=$row_v['No_SPP'];
			/*ESTADO HEMODINAMICO*/
			$ta_1_v=$row_v['ta1'];
			$ta_2_v=$row_v['ta2'];
			$pam_v=$row_v['pam'];
			$fc_v=$row_v['fc'];
			$so2_v=$row_v['so2'];
			$fr_v=$row_v['fr'];
			$tem_v=$row_v['tem'];
			$pvc_v=$row_v['pvc'];
			$iu_v=$row_v['ui'];
			$dx_v=$row_v['dx'];
			$pia_v=$row_v['pia'];
			/*ESTADO NEUROLOGICO*/
			$glasgow_v=$row_v['glasgow'];
			$rass_v=$row_v['rass'];
			$ramsay_v=$row_v['ramsay'];
			$braden_v=$row_v['braden'];
			$crichton_v=$row_v['crichton'];
			$tiss_v=$row_v['tiss'];
			$clase_v=$row_v['clase'];
			/*ESTADO METABOLICO*/
			$dieta_v=$row_v['dieta'];
			$ayuno_v=$row_v['ayuno'];
			/*VENTILACIÓN/OXÍGENO*/
			$vm_v=$row_v['vm'];
			$mv_v=$row_v['mv'];
			$fio2_v=$row_v['fio2'];
			$so2vo_v=$row_v['so2_2'];
			/*ANTIBIOTICOS*/
			$ant1_v=$row_v['ant1'];
			$ant2_v=$row_v['ant2'];
			$ant3_v=$row_v['ant3'];
			$ant4_v=$row_v['ant4'];
			$ant5_v=$row_v['ant5'];
			/*DÍAS*/
			$dia1_v=$row_v['dia1'];
			$dia2_v=$row_v['dia2'];
			$dia3_v=$row_v['dia3'];
			$dia4_v=$row_v['dia4'];
			$dia5_v=$row_v['dia5'];
			/*LÍQUIDOS PARENTALES*/
			$lsps_v=$row_v['lsps'];
			$aminas_v=$row_v['aminas'];
			$sedacion_v=$row_v['sedacion'];
			/*LAB*/
			$bh_v=$row_v['bh'];
			//echo "$bh";
			$qs_v=$row_v['qs'];
			$elts_v=$row_v['elts'];
			$tp_v=$row_v['tp'];
			$tpt_v=$row_v['tpt'];
			$cpk_v=$row_v['cpk'];
			$ego_v=$row_v['ego'];
			$culti_v=$row_v['culti'];
			$otro_v=$row_v['otro'];
			$rx_v=$row_v['rx'];
			/*HEMODERIVADOS*/
			$cecc_pg_v=$row_v['pg_cecc'];
			$cecc_pfc_v=$row_v['pfc_cecc'];
			$cecc_cp_v=$row_v['cp_cecc'];
			$hgs_pg_v=$row_v['pg_hgs'];
			$hgs_pfc_v=$row_v['pfc_hgs'];
			$hgs_cp_v=$row_v['cp_hgs'];
			/*OBSERVACIONES*/
			$obser_v=$row_v['observaciones'];
			/*SD*/
			$sv_v=$row_v['sv'];
			$sng_v=$row_v['sng'];
			$sog_v=$row_v['sog'];
			$te_v=$row_v['te'];
			$cvc_v=$row_v['cvc'];
			$cvp_v=$row_v['cvp'];
			/*FI*/
			$fi1_v=$row_v['fi1'];
			$fi2_v=$row_v['fi2'];
			$fi3_v=$row_v['fi3'];
			$fi4_v=$row_v['fi4'];
			$fi5_v=$row_v['fi5'];
			$fi6_v=$row_v['fi6'];
			/* FC */
			$fc1_v=$row_v['fc1'];
			$fc2_v=$row_v['fc2'];
			$fc3_v=$row_v['fc3'];
			$fc4_v=$row_v['fc4'];
			$fc5_v=$row_v['fc5'];
			$fc6_v=$row_v['fc6'];
        }
        // Free result set
        mysqli_free_result($result_v);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//Consulta nocturno
//Consulta tarde
//Imprimir archivos
if($result_n = mysqli_query($link, $sql_n)){
    if(mysqli_num_rows($result_n) > 0){
    	while($row_n = mysqli_fetch_array($result_n)){
		    /*DATOS GENERALES*/
			$n_expediente_n=$row_n['No_expediente'];
			$id_enfermero_n=$row_n['idenfermero'];
			$fecha_n=$row_n['fecha'];
			$turno_n=$row_n['turno'];
			$paciente_n=$row_n['tipo_paciente'];
			$cama_n=$row_n['nocama'];
			$unidad_n=$row_n['unidad'];
			/* DATOS DEL PACIENTE */
			$nombre_pa_n=$row_n['Nombre'];
			$edad_n=$row_n['Edad'];
			$sexo_n=$row_n['Sexo'];
			$diagnostico_n=$row_n['Diagnostico'];
			$lugar_referencia_n=$row_n['l_referencia'];
			$fecha_ingreso_n=$row_n['fecha_ingreso'];
			$fecha_evento_n=$row_n['dia_evento'];
			$fecha_nacimiento_n=$row_n['F_nacimiento'];
			$numero_seguro_n=$row_n['No_SPP'];
			/*ESTADO HEMODINAMICO*/
			$ta_1_n=$row_n['ta1'];
			$ta_2_n=$row_n['ta2'];
			$pam_n=$row_n['pam'];
			$fc_n=$row_n['fc'];
			$so2_n=$row_n['so2'];
			$fr_n=$row_n['fr'];
			$tem_n=$row_n['tem'];
			$pvc_n=$row_n['pvc'];
			$iu_n=$row_n['ui'];
			$dx_n=$row_n['dx'];
			$pia_n=$row_n['pia'];
			/*ESTADO NEUROLOGICO*/
			$glasgow_n=$row_n['glasgow'];
			$rass_n=$row_n['rass'];
			$ramsay_n=$row_n['ramsay'];
			$braden_n=$row_n['braden'];
			$crichton_n=$row_n['crichton'];
			$tiss_n=$row_n['tiss'];
			$clase_n=$row_n['clase'];
			/*ESTADO METABOLICO*/
			$dieta_n=$row_n['dieta'];
			$ayuno_n=$row_n['ayuno'];
			/*VENTILACIÓN/OXÍGENO*/
			$vm_n=$row_n['vm'];
			$mv_n=$row_n['mv'];
			$fio2_n=$row_n['fio2'];
			$so2vo_n=$row_n['so2_2'];
			/*ANTIBIOTICOS*/
			$ant1_n=$row_n['ant1'];
			$ant2_n=$row_n['ant2'];
			$ant3_n=$row_n['ant3'];
			$ant4_n=$row_n['ant4'];
			$ant5_n=$row_n['ant5'];
			/*DÍAS*/
			$dia1_n=$row_n['dia1'];
			$dia2_n=$row_n['dia2'];
			$dia3_n=$row_n['dia3'];
			$dia4_n=$row_n['dia4'];
			$dia5_n=$row_n['dia5'];
			/*LÍQUIDOS PARENTALES*/
			$lsps_n=$row_n['lsps'];
			$aminas_n=$row_n['aminas'];
			$sedacion_n=$row_n['sedacion'];
			/*LAB*/
			$bh_n=$row_n['bh'];
			//echo "$bh";
			$qs_n=$row_n['qs'];
			$elts_n=$row_n['elts'];
			$tp_n=$row_n['tp'];
			$tpt_n=$row_n['tpt'];
			$cpk_n=$row_n['cpk'];
			$ego_n=$row_n['ego'];
			$culti_n=$row_n['culti'];
			$otro_n=$row_n['otro'];
			$rx_n=$row_n['rx'];
			/*HEMODERIVADOS*/
			$cecc_pg_n=$row_n['pg_cecc'];
			$cecc_pfc_n=$row_n['pfc_cecc'];
			$cecc_cp_n=$row_n['cp_cecc'];
			$hgs_pg_n=$row_n['pg_hgs'];
			$hgs_pfc_n=$row_n['pfc_hgs'];
			$hgs_cp_n=$row_n['cp_hgs'];
			/*OBSERVACIONES*/
			$obser_n=$row_n['observaciones'];
			/*SD*/
			$sv_n=$row_n['sv'];
			$sng_n=$row_n['sng'];
			$sog_n=$row_n['sog'];
			$te_n=$row_n['te'];
			$cvc_n=$row_n['cvc'];
			$cvp_n=$row_n['cvp'];
			/*FI*/
			$fi1_n=$row_n['fi1'];
			$fi2_n=$row_n['fi2'];
			$fi3_n=$row_n['fi3'];
			$fi4_n=$row_n['fi4'];
			$fi5_n=$row_n['fi5'];
			$fi6_n=$row_n['fi6'];
			/* FC */
			$fc1_n=$row_n['fc1'];
			$fc2_n=$row_n['fc2'];
			$fc3_n=$row_n['fc3'];
			$fc4_n=$row_n['fc4'];
			$fc5_n=$row_n['fc5'];
			$fc6_n=$row_n['fc6'];
        }
        // Free result set
        mysqli_free_result($result_n);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
<div  style="text-align: right;">FECHA: <?php echo "$fecha"?></div>
TURNO: <?php echo "$turno"?>
<table >
		<thead><tr><tr><th rowspan="3">CAMA</th></tr><th>DATOS DEL PACIENTE</th><th>ESTADO HEMODINAMICO</th><th>ESTADO NEUROLÓGICO</th><th>VENTILACIÓN/OXÍGENO</th><th>LÍQUIDOS PARENTALES</th><th>LAB</th><th>RX</th><th>HEMODERIVADOS</th><th>OBSERVACIONES</th></tr></thead>
		
		<tbody><td><?php echo "$cama"?></td>
			<td>NOMBRE <textarea name="nombre" id="nombre" onkeyup="saltar(event,'edad')" onkeypress="return pulsar(event)"> <?php echo "$nombre_pa"?> </textarea></td>
			<td>TA<input type="text" size="3"name="ta1"id="ta1"onkeyup="saltar(event,'ta2')"onkeypress="return pulsar(event)" value="<?php echo "$ta_1"?>" /> <input type="text" size="3px" name="ta2" id="ta2" onkeyup="saltar(event,'pam')"onkeypress="return pulsar(event)" value="<?php echo "$ta_2"?>"/></td>
			<td>GLASGOW <input type="text"size="2" name="glasgow" id="glasgow" onkeyup="saltar(event,'rass')"onkeypress="return pulsar(event)" value="<?php echo "$glasgow"?>"/></td>
			<td>VM <input type="text"size="4" name="vm" id="vm"onkeyup=" saltar(event,'mv')"onkeypress="return pulsar(event)" value="<?php echo "$vm"?>"/></td><td>LSPS<input type="text"size="6" name="lsps" id="lsps" onkeyup="saltar(event,'aminas')"onkeypress="return pulsar(event)" value="<?php echo "$lsps"?>"/></td>
			<td>BH <input type="checkbox" name="bh" value="1" id="bh"onkeyup="saltar(event,'qs')"onkeypress="return pulsar(event)" <?php if($bh==1){echo 'checked';}?>/></td>
			<td><input type="checkbox" name="rx" value="9"id="rx"onkeyup="saltar(event,'pg1')"onkeypress="return pulsar(event)" <?php if($rx==1){echo 'checked';}?>/></td><td>
		
		<!-- Tabla de hemoderivados -->
		<table>
		<tr><th>CEEC</th><th>&nbsp;&nbsp;HGS</th>
		</table></td><td><!--Conclusiones --> 
		<textarea name="observaciones" id="observaciones" cols="22" rows="7" wrap="VIRTUAL"> <?php echo "$obser"?> </textarea></td></tr>
		<tr>
			<td></td>
			<td>EDAD <input type="text"name="edad"id="edad"onkeyup="saltar(event,'sexo')" onkeypress="return pulsar(event)" value="<?php echo "$edad"?>"/></td>
			<td>PAM <input type="text" size="2"id="pam"name="pam"onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)" value="<?php echo "$pam"?>"/></td>
			<td>RASS <input type="text"size="2" name="rass" id="rass"onkeyup="saltar(event,'ramsay')"onkeypress="return pulsar(event)" value="<?php echo "$rass"?>"/></td>
			<td>MV <select name="mv"> 
				<option value="<?php echo "$mv"?>"><?php echo "$mv"?></option>
			</select></td>
			<td>AMINAS<input type="text" size="6"name="aminas"id="aminas"onkeyup="saltar(event,'sedacion')"onkeypress="return pulsar(event)" value="<?php echo "$aminas"?>" /></td>
			<td>QS <input type="checkbox" name="qs" value="2"id="qs"onkeyup="saltar(event,'elts')"onkeypress="return pulsar(event)" <?php if($qs==1){echo 'checked';}?> /></td><td></td><td><table><tr><th>PG</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG</th></tr></table></td></tr>
		<tr><td></td>
			<td>SEXO <input type="tex" name="sexo" id="sexo"onkeyup="saltar(event,'diagnostico')"onkeypress="return pulsar(event)"onkeypress="return pulsar(event)" value="<?php echo "$sexo"?>"/></td>
			<td>FC <input type="text" size="2" name="fc" id="fc"onkeyup="saltar(event,'so2')"onkeypress="return pulsar(event)" value="<?php echo "$fc"?>"/></td>
			<td>RAMSAY <input type="text"size="2" name="ramsay" id="ramsay"onkeyup="saltar(event,'braden')"onkeypress="return pulsar(event)" value="<?php echo "$ramsay"?>"/></td>
			<td>FiO2% <input type="text" size="4" name="fio2" id="fio2" onkeyup="saltar(event,'so2vo')"onkeypress="return pulsar(event)" value="<?php echo "$fio2"?>"/></td>
			<td>SEDACION<input type="text" size="6" name="sedacion" id="sedacion" onkeyup="saltar(event,'sv')"onkeypress="return pulsar(event)" value="<?php echo "$sedacion"?>"/></td>
			<td>ELTS <input type="checkbox" name="elts" value="3"id="elts"onkeyup="saltar(event,'tp')"onkeypress="return pulsar(event)" <?php if($elts==1){echo 'checked';}?> /></td><td></td><td><table><tr>
				<td><input type="text" size="1" name="pg1" id="pg1"onkeyup="saltar(event,'pg2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_pg"?>"/></td>
				<td><input type="text" size="1" name="pg2" id="pg2"onkeyup="saltar(event,'pfc1')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_pg"?>"/></td></tr></table></td>
		</tr>
		<tr>
			<td></td>
			<td>DIAGNÓSTICO <input type="text" name="diagnostico" id="diagnostico" onkeyup="saltar(event,'lreferencia')"onkeypress="return pulsar(event)" value="<?php echo "$diagnostico"?>"/></td>
			<td>SO2 <input type="text"size="2"name="so2"id="so2"  onkeyup="copiar2()"onkeypress="return pulsar(event)" value="<?php echo "$so2"?>" /></td>
			<td>BRADEN <input type="text"size="2" name="braden" id="braden"onkeyup="saltar(event,'crichton')"onkeypress="return pulsar(event)" value="<?php echo "$braden"?>"/></td>
			<td>SO2 <input type="text"size="4" name="so2vo" id="so2vo"onkeyup="saltar(event,'antb1')"onkeypress="return pulsar(event)" value="<?php echo "$so2"?>"/></td>
			<td><table><th>S/D</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F.I.</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC</th></table></td><td>TP&nbsp;&nbsp;<input type="checkbox" name="tp" value="4" id="tp" onkeyup="saltar(event,'tpt')" onkeypress="return pulsar(event)" <?php if($tp==1){echo 'checked';}?>/></td><td></td><td><table><th>PFC</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PFC</th></table></td></tr>
		<tr><td></td>
			<td>L. REFERENCIA <input type="text" name="lreferencia" id="lreferencia" onkeyup="saltar(event,'ingreso')"onkeypress="return pulsar(event)" value="<?php echo "$lugar_referencia"?>"/></td>
			<td>FR <input type="text"size="2"name="fr"id="fr"onkeyup="saltar(event,'tem')"onkeypress="return pulsar(event)" value="<?php echo "$fr"?>"/></td>
			<td>CRICHTON <input type="text"size="2"name="crichton"id="crichton"onkeyup="saltar(event,'tiss')"onkeypress="return pulsar(event)" value="<?php echo "$crichton"?>"/></td>
		<!-- Tabla antibióticos -->
		<td>
		<table>
		<tr><th>ANTIBIÓTICOS</th><th>&nbsp;&nbsp;&nbsp;&nbsp;DÍAS</th></tr>
		</table>
		<td><table>
			<td>S.V&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sv" value="1" id="sv"onkeyup="saltar(event,'sng')"onkeypress="return pulsar(event)" <?php if($sv==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi" id="fi" onkeyup="saltar(event,'fi2')"onkeypress="return pulsar(event)" value="<?php echo "$fi1"?>"/></td>
			<td><input type="text" size="1" name="fc1" id="fc1"onkeyup="saltar(event,'fc2')"onkeypress="return pulsar(event)" value="<?php echo "$fc1"?>"/></td></table></td>
			<td>TPT<input type="checkbox" name="tpt" value="5"id="tpt"onkeyup="saltar(event,'cpk')"onkeypress="return pulsar(event)" <?php if($tpt==1){echo 'checked';}?>/><td></td>
			<td><table>
				<td><input type="text" size="1" name="pfc1" id="pfc1"onkeyup="saltar(event,'pfc2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_pfc"?>"/></td>
				<td><input type="text" size="1" name="pfc2" id="pfc2"onkeyup="saltar(event,'cp1')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_pfc"?>"/></td>
				</table></td></td>
		</td>
	</tr>
		<tr><td></td>
			<td>FECHA DE INGRESO <input type="date" name="ingreso" id="ingreso"onkeyup="saltar(event,'evento')"onkeypress="return pulsar(event)" value="<?php echo "$fecha_ingreso"?>"/></td>
			<td>TEM <input type="text"size="2"name="tem"id="tem"onkeyup="saltar(event,'pvc')"onkeypress="return pulsar(event)" value="<?php echo "$tem"?>"/></td>
			<td>TISS <input type="text"size="2" name="tiss" id="tiss"onkeyup="saltar(event,'clase')"onkeypress="return pulsar(event)" value="<?php echo "$tiss"?>"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text" size="10" name="antb1" id="antb1"onkeyup="saltar(event,'dia1')"onkeypress="return pulsar(event)" value="<?php echo "$ant1"?>"/></td>
			<td> <input type="text" size="1" name="dia1" id="dia1"onkeyup="saltar(event,'antb2')"onkeypress="return pulsar(event)" value="<?php echo "$dia1"?>"/></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>S.NG. <input type="checkbox" value="1" name="sng" id="sng" onkeyup="saltar(event,'sog')"onkeypress="return pulsar(event)" <?php if($sng==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi2" id="fi2" onkeyup="saltar(event,'fi3')"onkeypress="return pulsar(event)" value="<?php echo "$fi2"?>" /></td>
			<td><input type="text" size="1" name="fc2" id="fc2" onkeyup="saltar(event,'fc3')"onkeypress="return pulsar(event)" value="<?php echo "$fc2"?>" /></td></table></td>
			<td>CPK<input type="checkbox" name="cpk" value="6" id="cpk" onkeyup="saltar(event,'ego')"onkeypress="return pulsar(event)" <?php if($cpk==1){echo 'checked';}?> /><td></td><td><table><th>CP</th><th>CP</th></table></td></td>
		</td></tr>
		<tr><td></td>
			<td>DÍA DEL EVENTO <input type="date" name="evento" id="evento"onkeyup=" saltar(event,'fnacimiento')" onkeypress="return pulsar(event)" value="<?php echo "$fecha_evento"?>" /></td>
			<td>PVC <input type="text"size="2" name="pvc" id="pvc" onkeyup="saltar(event,'iu')" onkeypress="return pulsar(event)" value="<?php echo "$pvc"?>" /></td>
			<td>CLASE <input type="text"size="2" name="clase" id="clase" onkeyup="saltar(event,'dieta')"onkeypress="return pulsar(event)" value="<?php echo "$clase"?>" /></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10" name="antb2" id="antb2"onkeyup="saltar(event,'dia2')"onkeypress="return pulsar(event)" value="<?php echo "$ant2"?>" /></td>
			<td><input type="text" size="1" name="dia2" id="dia2"onkeyup="saltar(event,'antb3')"onkeypress="return pulsar(event)" value="<?php echo "$dia2"?>" /></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>S.OG.<input type="checkbox" value="1" name="sog" id="sog"onkeyup="saltar(event,'te')"onkeypress="return pulsar(event)" <?php if($sog==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi3" id="fi3" onkeyup="saltar(event,'fi4')"onkeypress="return pulsar(event)" value="<?php echo "$fi3"?>" /></td>
			<td><input type="text" size="1" name="fc3" id="fc3" onkeyup="saltar(event,'fc4')"onkeypress="return pulsar(event)" value="<?php echo "$fc3"?>" /></td></table></td>
			<td>EGO<input type="checkbox" name="ego" value="7" id="ego" onkeyup="saltar(event,'culti')"onkeypress="return pulsar(event)" <?php if($ego==1){echo 'checked';}?>/>
				<td></td><td><table>
					<td><input type="text" size="1" name="cp1" id="cp1"onkeyup="saltar(event,'cp2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_cp"?>" /></td>
					<td><input type="text" size="1" name="cp2" id="cp2"onkeyup="saltar(event,'observaciones')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_cp"?>" /></td></table></td></td>
		</td></tr>
		<tr><td></td>
			<td>FECHA DE NACIMIENTO <input type="date" name="fnacimiento" id="fnacimiento" onkeyup="saltar(event,'noexpediente')"onkeypress="return pulsar(event)" value="<?php echo "$fecha_nacimiento"?>" /></td>
			<td>UI <input type="text" size="2" name="iu" id="iu" onkeyup="saltar(event,'dx')" onkeypress="return pulsar(event)" value="<?php echo "$iu"?>" /></td>
			<td><strong>Estado metabólico</strong></td><td>
		<table>
		<tbody>
		<tr>
			<td> <input type="text" size="10" name="antb3" id="antb3" onkeyup="saltar(event,'dia3')" onkeypress="return pulsar(event)" value="<?php echo "$ant3"?>" /></td>
			<td><input type="text" size="1" name="dia3" id="dia3" onkeyup="saltar(event,'antb4')" onkeypress="return pulsar(event)" value="<?php echo "$dia3"?>" /></td>
		</tr>
		</tbody>
		</table>
		<td><table>
			<td>T.E.&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="1" name="te" id="te"onkeyup="saltar(event,'cvc')" onkeypress="return pulsar(event)" <?php if($te==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi4" id="fi4" onkeyup="saltar(event,'fi5')"onkeypress="return pulsar(event)" value="<?php echo "$fi4"?>" /></td>
			<td><input type="text" size="1" name="fc4" id="fc4" onkeyup="saltar(event,'fc5')"onkeypress="return pulsar(event)" value="<?php echo "$fc4"?>" /></td></table></td><td>CULTI<input type="checkbox" name="culti" value="8"id="culti"onkeyup="saltar(event,'otro')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td>
			<td>NO. EXPEDIENTE <input type="text" name="noexpediente" id="noexpediente" value="<?php echo "$n_expediente"?>" onkeyup="saltar(event,'nospp')"onkeypress="return pulsar(event)"/> </td>
			<td>DX <input type="text" size="2" name="dx" id="dx"onkeyup="saltar(event,'pia')"onkeypress="return pulsar(event)" value="<?php echo "$dx"?>" /></td>
			<td>DIETA <input type="text" name="dieta" id="dieta"onkeyup="saltar(event,'ayuno')"onkeypress="return pulsar(event)" value="<?php echo "$dieta"?>"/></td><td>
		<table>
		<tbody>
		<tr>
			<td><input type="text" size="10" name="antb4" id="antb4" onkeyup="saltar(event,'dia4')"onkeypress="return pulsar(event)" value="<?php echo "$ant4"?>"/></td>
			<td><input type="text" size="1" name="dia4" id="dia4" onkeyup="saltar(event,'antb5')"onkeypress="return pulsar(event)" value="<?php echo "$dia4"?>" /></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>CVC&nbsp;&nbsp;<input type="checkbox" value="1" name="cvc" id="cvc" onkeyup="saltar(event,'cvp')"onkeypress="return pulsar(event)" <?php if($cvc==1){echo 'checked';}?> /></td>
			<td><input type="text" name="fi5" id="fi5" onkeyup="saltar(event,'fi6')"onkeypress="return pulsar(event)" size="1" value="<?php echo "$fi5"?>"/></td>
			<td><input type="text" name="fc5"  id="fc5" size="1" onkeyup="saltar(event,'fc6')"onkeypress="return pulsar(event)" value="<?php echo "$fc5"?>"/></td></table></td>
			<td>OTRO<input type="checkbox" name="otro" value="8"id="otro"onkeyup="saltar(event,'rx')"onkeypress="return pulsar(event)" <?php if($otro==1){echo 'checked';}?>/></td>
		</td></tr>
		<tr><td></td>
			<td>NO. SPP <input type="text" name="nospp" id="nospp" onkeyup="saltar(event,'ta1')" onkeypress="return pulsar(event)" value="<?php echo "$numero_seguro"?>" /></td>
			<td>PIA <input type="text" size="2" name="pia" id="pia" onkeyup="saltar(event,'glasgow')" onkeypress="return pulsar(event)" value="<?php echo "$pia"?>" /></td>
			<td>AYUNO <input type="text" name="ayuno" id="ayuno" onkeyup="saltar(event,'vm')" onkeypress="return pulsar(event)" value="<?php echo "$ayuno"?>" /></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text" size="10" name=" antb5" id="antb5" onkeyup="saltar(event,'dia5')"onkeypress="return pulsar(event)" value="<?php echo "$ant5"?>" /></td>
			<td><input type="text" size="1" name="dia5" id="dia5" onkeyup="saltar(event,'antib')"onkeypress="return pulsar(event)" value="<?php echo "$dia5"?>"/></table>
				<td><table>
					<td>CVP&nbsp;<input type="checkbox" value="1" name="cvp" id="cvp" onkeyup="saltar(event,'fi')"onkeypress="return pulsar(event)" <?php if($cvp==1){echo 'checked';}?> /></td>
					<td><input type="text" name="fi6" id="fi6" size="1" onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)" value="<?php echo "$fi6"?>"/></td>
					<td><input type="text" size="1" name="fc6" id="fc6" onkeyup="saltar(event,'bh')"onkeypress="return pulsar(event)" value="<?php echo "$fc6"?>" /></td>
				</table></td><td></td>
		</tbody>
		</td></tr>
		</tbody>
		</table>
<!--Turno Vespertino-->		
<div  style="text-align: right;">FECHA: <?php echo "$fecha_v"?></div>
TURNO: <?php echo "$turno_v"?>
<table>
		<thead><tr><tr><th rowspan="3">CAMA</th></tr><th>DATOS DEL PACIENTE</th><th>ESTADO HEMODINAMICO</th><th>ESTADO NEUROLÓGICO</th><th>VENTILACIÓN/OXÍGENO</th><th>LÍQUIDOS PARENTALES</th><th>LAB</th><th>RX</th><th>HEMODERIVADOS</th><th>OBSERVACIONES</th></tr></thead>
		
		<tbody><td><?php echo "$cama_v"?></td>
			<td>NOMBRE <textarea name="nombre" id="nombre" onkeyup="saltar(event,'edad')" onkeypress="return pulsar(event)"> <?php echo "$nombre_pa_v"?> </textarea></td>
			<td>TA<input type="text" size="3"name="ta1"id="ta1"onkeyup="saltar(event,'ta2')"onkeypress="return pulsar(event)" value="<?php echo "$ta_1_v"?>" /> <input type="text" size="3px" name="ta2" id="ta2" onkeyup="saltar(event,'pam')"onkeypress="return pulsar(event)" value="<?php echo "$ta_2_v"?>"/></td>
			<td>GLASGOW <input type="text"size="2" name="glasgow" id="glasgow" onkeyup="saltar(event,'rass')"onkeypress="return pulsar(event)" value="<?php echo "$glasgow_v"?>"/></td>
			<td>VM <input type="text"size="4" name="vm" id="vm"onkeyup=" saltar(event,'mv')"onkeypress="return pulsar(event)" value="<?php echo "$vm_v"?>"/></td><td>LSPS<input type="text"size="6" name="lsps" id="lsps" onkeyup="saltar(event,'aminas')"onkeypress="return pulsar(event)" value="<?php echo "$lsps_v"?>"/></td>
			<td>BH <input type="checkbox" name="bh" value="1" id="bh"onkeyup="saltar(event,'qs')"onkeypress="return pulsar(event)" <?php if($bh_v==1){echo 'checked';}?>/></td>
			<td><input type="checkbox" name="rx" value="9"id="rx"onkeyup="saltar(event,'pg1')"onkeypress="return pulsar(event)" <?php if($rx_v==1){echo 'checked';}?>/></td><td>
		
		<!-- Tabla de hemoderivados -->
		<table>
		<tr><th>CEEC</th><th>&nbsp;&nbsp;HGS</th>
		</table></td><td><!--Conclusiones --> 
		<textarea name="observaciones" id="observaciones" cols="22" rows="7" wrap="VIRTUAL"> <?php echo "$obser_v"?> </textarea></td></tr>
		<tr>
			<td></td>
			<td>EDAD <input type="text" name="edad" id="edad"onkeyup="saltar(event,'sexo')" onkeypress="return pulsar(event)" value="<?php echo "$edad_v"?>"/></td>
			<td>PAM <input type="text" size="2"id="pam"name="pam"onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)" value="<?php echo "$pam_v"?>"/></td>
			<td>RASS <input type="text"size="2" name="rass" id="rass"onkeyup="saltar(event,'ramsay')"onkeypress="return pulsar(event)" value="<?php echo "$rass_v"?>"/></td>
			<td>MV <select name="mv"> 
				<option value="<?php echo "$mv_v"?>"><?php echo "$mv_v"?></option>
			</select></td>
			<td>AMINAS<input type="text" size="6"name="aminas"id="aminas"onkeyup="saltar(event,'sedacion')"onkeypress="return pulsar(event)" value="<?php echo "$aminas_v"?>" /></td>
			<td>QS <input type="checkbox" name="qs" value="2"id="qs"onkeyup="saltar(event,'elts')"onkeypress="return pulsar(event)" <?php if($qs_v==1){echo 'checked';}?> /></td><td></td><td><table><tr><th>PG</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG</th></tr></table></td></tr>
		<tr><td></td>
			<td>SEXO <input type="tex" name="sexo" id="sexo"onkeyup="saltar(event,'diagnostico')"onkeypress="return pulsar(event)"onkeypress="return pulsar(event)" value="<?php echo "$sexo_v"?>"/></td>
			<td>FC <input type="text" size="2" name="fc" id="fc"onkeyup="saltar(event,'so2')"onkeypress="return pulsar(event)" value="<?php echo "$fc_v"?>"/></td>
			<td>RAMSAY <input type="text"size="2" name="ramsay" id="ramsay"onkeyup="saltar(event,'braden')"onkeypress="return pulsar(event)" value="<?php echo "$ramsay_v"?>"/></td>
			<td>FiO2% <input type="text" size="4" name="fio2" id="fio2" onkeyup="saltar(event,'so2vo')"onkeypress="return pulsar(event)" value="<?php echo "$fio2_v"?>"/></td>
			<td>SEDACION<input type="text" size="6" name="sedacion" id="sedacion" onkeyup="saltar(event,'sv')"onkeypress="return pulsar(event)" value="<?php echo "$sedacion_v"?>"/></td>
			<td>ELTS <input type="checkbox" name="elts" value="3"id="elts"onkeyup="saltar(event,'tp')"onkeypress="return pulsar(event)" <?php if($elts_v==1){echo 'checked';}?> /></td><td></td><td><table><tr>
				<td><input type="text" size="1" name="pg1" id="pg1"onkeyup="saltar(event,'pg2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_pg_v"?>"/></td>
				<td><input type="text" size="1" name="pg2" id="pg2"onkeyup="saltar(event,'pfc1')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_pg_v"?>"/></td></tr></table></td>
		</tr>
		<tr>
			<td></td>
			<td>DIAGNÓSTICO <input type="text" name="diagnostico" id="diagnostico" onkeyup="saltar(event,'lreferencia')"onkeypress="return pulsar(event)" value="<?php echo "$diagnostico_v"?>"/></td>
			<td>SO2 <input type="text"size="2"name="so2"id="so2"  onkeyup="copiar2()"onkeypress="return pulsar(event)" value="<?php echo "$so2_v"?>" /></td>
			<td>BRADEN <input type="text"size="2" name="braden" id="braden"onkeyup="saltar(event,'crichton')"onkeypress="return pulsar(event)" value="<?php echo "$braden_v"?>"/></td>
			<td>SO2 <input type="text"size="4" name="so2vo" id="so2vo"onkeyup="saltar(event,'antb1')"onkeypress="return pulsar(event)" value="<?php echo "$so2_v"?>"/></td>
			<td><table><th>S/D</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F.I.</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC</th></table></td><td>TP&nbsp;&nbsp;<input type="checkbox" name="tp" value="4" id="tp" onkeyup="saltar(event,'tpt')" onkeypress="return pulsar(event)" <?php if($tp_v==1){echo 'checked';}?>/></td><td></td><td><table><th>PFC</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PFC</th></table></td></tr>
		<tr><td></td>
			<td>L. REFERENCIA <input type="text" name="lreferencia" id="lreferencia" onkeyup="saltar(event,'ingreso')"onkeypress="return pulsar(event)" value="<?php echo "$lugar_referencia_v"?>"/></td>
			<td>FR <input type="text" size="2" name="fr" id="fr"onkeyup="saltar(event,'tem')"onkeypress="return pulsar(event)" value="<?php echo "$fr_v"?>"/></td>
			<td>CRICHTON <input type="text"size="2"name="crichton"id="crichton"onkeyup="saltar(event,'tiss')"onkeypress="return pulsar(event)" value="<?php echo "$crichton_v"?>"/></td>
		<!-- Tabla antibióticos -->
		<td>
		<table>
		<tr><th>ANTIBIÓTICOS</th><th>&nbsp;&nbsp;&nbsp;&nbsp;DÍAS</th></tr>
		</table>
		<td><table>
			<td>S.V&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sv" value="1" id="sv"onkeyup="saltar(event,'sng')"onkeypress="return pulsar(event)" <?php if($sv_v==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi" id="fi" onkeyup="saltar(event,'fi2')"onkeypress="return pulsar(event)" value="<?php echo "$fi1_v"?>"/></td>
			<td><input type="text" size="1" name="fc1" id="fc1"onkeyup="saltar(event,'fc2')"onkeypress="return pulsar(event)" value="<?php echo "$fc1_v"?>"/></td></table></td>
			<td>TPT<input type="checkbox" name="tpt" value="5"id="tpt"onkeyup="saltar(event,'cpk')"onkeypress="return pulsar(event)" <?php if($tpt_v==1){echo 'checked';}?>/><td></td>
			<td><table>
				<td><input type="text" size="1" name="pfc1" id="pfc1"onkeyup="saltar(event,'pfc2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_pfc_v"?>"/></td>
				<td><input type="text" size="1" name="pfc2" id="pfc2"onkeyup="saltar(event,'cp1')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_pfc_v"?>"/></td>
				</table></td></td>
		</td>
	</tr>
		<tr><td></td>
			<td>FECHA DE INGRESO <input type="date" name="ingreso" id="ingreso"onkeyup="saltar(event,'evento')"onkeypress="return pulsar(event)" value="<?php echo "$fecha_ingreso_v"?>"/></td>
			<td>TEM <input type="text"size="2"name="tem"id="tem"onkeyup="saltar(event,'pvc')"onkeypress="return pulsar(event)" value="<?php echo "$tem_v"?>"/></td>
			<td>TISS <input type="text"size="2" name="tiss" id="tiss"onkeyup="saltar(event,'clase')"onkeypress="return pulsar(event)" value="<?php echo "$tiss_v"?>"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text" size="10" name="antb1" id="antb1"onkeyup="saltar(event,'dia1')"onkeypress="return pulsar(event)" value="<?php echo "$ant1_v"?>"/></td>
			<td> <input type="text" size="1" name="dia1" id="dia1"onkeyup="saltar(event,'antb2')"onkeypress="return pulsar(event)" value="<?php echo "$dia1_v"?>"/></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>S.NG. <input type="checkbox" value="1" name="sng" id="sng" onkeyup="saltar(event,'sog')"onkeypress="return pulsar(event)" <?php if($sng_v==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi2" id="fi2" onkeyup="saltar(event,'fi3')"onkeypress="return pulsar(event)" value="<?php echo "$fi2_v"?>" /></td>
			<td><input type="text" size="1" name="fc2" id="fc2" onkeyup="saltar(event,'fc3')"onkeypress="return pulsar(event)" value="<?php echo "$fc2_v"?>" /></td></table></td>
			<td>CPK<input type="checkbox" name="cpk" value="6" id="cpk" onkeyup="saltar(event,'ego')"onkeypress="return pulsar(event)" <?php if($cpk_v==1){echo 'checked';}?> /><td></td><td><table><th>CP</th><th>CP</th></table></td></td>
		</td></tr>
		<tr><td></td>
			<td>DÍA DEL EVENTO <input type="date" name="evento" id="evento"onkeyup=" saltar(event,'fnacimiento')" onkeypress="return pulsar(event)" value="<?php echo "$fecha_evento_v"?>" /></td>
			<td>PVC <input type="text"size="2" name="pvc" id="pvc" onkeyup="saltar(event,'iu')" onkeypress="return pulsar(event)" value="<?php echo "$pvc_v"?>" /></td>
			<td>CLASE <input type="text"size="2" name="clase" id="clase" onkeyup="saltar(event,'dieta')"onkeypress="return pulsar(event)" value="<?php echo "$clase_v"?>" /></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10" name="antb2" id="antb2"onkeyup="saltar(event,'dia2')"onkeypress="return pulsar(event)" value="<?php echo "$ant2_v"?>" /></td>
			<td><input type="text" size="1" name="dia2" id="dia2"onkeyup="saltar(event,'antb3')"onkeypress="return pulsar(event)" value="<?php echo "$dia2_v"?>" /></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>S.OG.<input type="checkbox" value="1" name="sog" id="sog"onkeyup="saltar(event,'te')"onkeypress="return pulsar(event)" <?php if($sog_v==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi3" id="fi3" onkeyup="saltar(event,'fi4')"onkeypress="return pulsar(event)" value="<?php echo "$fi3_v"?>" /></td>
			<td><input type="text" size="1" name="fc3" id="fc3" onkeyup="saltar(event,'fc4')"onkeypress="return pulsar(event)" value="<?php echo "$fc3_v"?>" /></td></table></td>
			<td>EGO<input type="checkbox" name="ego" value="7" id="ego" onkeyup="saltar(event,'culti')"onkeypress="return pulsar(event)" <?php if($ego_v==1){echo 'checked';}?>/>
				<td></td><td><table>
					<td><input type="text" size="1" name="cp1" id="cp1"onkeyup="saltar(event,'cp2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_cp_v"?>" /></td>
					<td><input type="text" size="1" name="cp2" id="cp2"onkeyup="saltar(event,'observaciones')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_cp_v"?>" /></td></table></td></td>
		</td></tr>
		<tr><td></td>
			<td>FECHA DE NACIMIENTO <input type="date" name="fnacimiento" id="fnacimiento" onkeyup="saltar(event,'noexpediente')"onkeypress="return pulsar(event)" value="<?php echo "$fecha_nacimiento_v"?>" /></td>
			<td>UI <input type="text" size="2" name="iu" id="iu" onkeyup="saltar(event,'dx')" onkeypress="return pulsar(event)" value="<?php echo "$iu_v"?>" /></td>
			<td><strong>Estado metabólico</strong></td><td>
		<table>
		<tbody>
		<tr>
			<td> <input type="text" size="10" name="antb3" id="antb3" onkeyup="saltar(event,'dia3')" onkeypress="return pulsar(event)" value="<?php echo "$ant3_v"?>" /></td>
			<td><input type="text" size="1" name="dia3" id="dia3" onkeyup="saltar(event,'antb4')" onkeypress="return pulsar(event)" value="<?php echo "$dia3_v"?>" /></td>
		</tr>
		</tbody>
		</table>
		<td><table>
			<td>T.E.&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="1" name="te" id="te"onkeyup="saltar(event,'cvc')" onkeypress="return pulsar(event)" <?php if($te_v==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi4" id="fi4" onkeyup="saltar(event,'fi5')"onkeypress="return pulsar(event)" value="<?php echo "$fi4_v"?>" /></td>
			<td><input type="text" size="1" name="fc4" id="fc4" onkeyup="saltar(event,'fc5')"onkeypress="return pulsar(event)" value="<?php echo "$fc4_v"?>" /></td></table></td>
			<td>CULTI<input type="checkbox" name="culti" value="8"id="culti"onkeyup="saltar(event,'otro')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td>
			<td>NO. EXPEDIENTE <input type="text" name="noexpediente" id="noexpediente" value="<?php echo "$n_expediente_v"?>" onkeyup="saltar(event,'nospp')"onkeypress="return pulsar(event)"/> </td>
			<td>DX <input type="text" size="2" name="dx" id="dx"onkeyup="saltar(event,'pia')"onkeypress="return pulsar(event)" value="<?php echo "$dx_v"?>" /></td>
			<td>DIETA <input type="text" name="dieta" id="dieta"onkeyup="saltar(event,'ayuno')"onkeypress="return pulsar(event)" value="<?php echo "$dieta_v"?>"/></td><td>
		<table>
		<tbody>
		<tr>
			<td><input type="text" size="10" name="antb4" id="antb4" onkeyup="saltar(event,'dia4')"onkeypress="return pulsar(event)" value="<?php echo "$ant4_v"?>"/></td>
			<td><input type="text" size="1" name="dia4" id="dia4" onkeyup="saltar(event,'antb5')"onkeypress="return pulsar(event)" value="<?php echo "$dia4_v"?>" /></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>CVC&nbsp;&nbsp;<input type="checkbox" value="1" name="cvc" id="cvc" onkeyup="saltar(event,'cvp')"onkeypress="return pulsar(event)" <?php if($cvc_v==1){echo 'checked';}?> /></td>
			<td><input type="text" name="fi5" id="fi5" onkeyup="saltar(event,'fi6')"onkeypress="return pulsar(event)" size="1" value="<?php echo "$fi5_v"?>"/></td>
			<td><input type="text" name="fc5"  id="fc5" size="1" onkeyup="saltar(event,'fc6')"onkeypress="return pulsar(event)" value="<?php echo "$fc5_v"?>"/></td></table></td>
			<td>OTRO<input type="checkbox" name="otro" value="8"id="otro"onkeyup="saltar(event,'rx')"onkeypress="return pulsar(event)" <?php if($otro_v==1){echo 'checked';}?>/></td>
		</td></tr>
		<tr><td></td>
			<td>NO. SPP <input type="text" name="nospp" id="nospp" onkeyup="saltar(event,'ta1')" onkeypress="return pulsar(event)" value="<?php echo "$numero_seguro_v"?>" /></td>
			<td>PIA <input type="text" size="2" name="pia" id="pia" onkeyup="saltar(event,'glasgow')" onkeypress="return pulsar(event)" value="<?php echo "$pia_v"?>" /></td>
			<td>AYUNO <input type="text" name="ayuno" id="ayuno" onkeyup="saltar(event,'vm')" onkeypress="return pulsar(event)" value="<?php echo "$ayuno_v"?>" /></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text" size="10" name=" antb5" id="antb5" onkeyup="saltar(event,'dia5')"onkeypress="return pulsar(event)" value="<?php echo "$ant5_v"?>" /></td>
			<td><input type="text" size="1" name="dia5" id="dia5" onkeyup="saltar(event,'antib')"onkeypress="return pulsar(event)" value="<?php echo "$dia5_v"?>"/></table>
				<td><table>
					<td>CVP&nbsp;<input type="checkbox" value="1" name="cvp" id="cvp" onkeyup="saltar(event,'fi')"onkeypress="return pulsar(event)" <?php if($cvp_v==1){echo 'checked';}?> /></td>
					<td><input type="text" name="fi6" id="fi6" size="1" onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)" value="<?php echo "$fi6_v"?>"/></td>
					<td><input type="text" size="1" name="fc6" id="fc6" onkeyup="saltar(event,'bh')"onkeypress="return pulsar(event)" value="<?php echo "$fc6_v"?>" /></td>
				</table></td><td></td>
		</tbody>
		</td></tr>
		</tbody>
		</table>
<!--turno nocturno-->
<div  style="text-align: right;">FECHA: <?php echo "$fecha_n"?></div>
TURNO: <?php echo "$turno_n"?>
<table>
		<thead><tr><tr><th rowspan="3">CAMA</th></tr><th>DATOS DEL PACIENTE</th><th>ESTADO HEMODINAMICO</th><th>ESTADO NEUROLÓGICO</th><th>VENTILACIÓN/OXÍGENO</th><th>LÍQUIDOS PARENTALES</th><th>LAB</th><th>RX</th><th>HEMODERIVADOS</th><th>OBSERVACIONES</th></tr></thead>
		
		<tbody><td><?php echo "$cama_n"?></td>
			<td>NOMBRE <textarea name="nombre" id="nombre" onkeyup="saltar(event,'edad')" onkeypress="return pulsar(event)"> <?php echo "$nombre_pa_n"?> </textarea></td>
			<td>TA<input type="text" size="3"name="ta1"id="ta1"onkeyup="saltar(event,'ta2')"onkeypress="return pulsar(event)" value="<?php echo "$ta_1_n"?>" /> <input type="text" size="3px" name="ta2" id="ta2" onkeyup="saltar(event,'pam')"onkeypress="return pulsar(event)" value="<?php echo "$ta_2_n"?>"/></td>
			<td>GLASGOW <input type="text"size="2" name="glasgow" id="glasgow" onkeyup="saltar(event,'rass')"onkeypress="return pulsar(event)" value="<?php echo "$glasgow_n"?>"/></td>
			<td>VM <input type="text"size="4" name="vm" id="vm"onkeyup=" saltar(event,'mv')"onkeypress="return pulsar(event)" value="<?php echo "$vm_n"?>"/></td><td>LSPS<input type="text"size="6" name="lsps" id="lsps" onkeyup="saltar(event,'aminas')"onkeypress="return pulsar(event)" value="<?php echo "$lsps_n"?>"/></td>
			<td>BH <input type="checkbox" name="bh" value="1" id="bh"onkeyup="saltar(event,'qs')"onkeypress="return pulsar(event)" <?php if($bh_n==1){echo 'checked';}?>/></td>
			<td><input type="checkbox" name="rx" value="9"id="rx"onkeyup="saltar(event,'pg1')"onkeypress="return pulsar(event)" <?php if($rx_n==1){echo 'checked';}?>/></td><td>
		
		<!-- Tabla de hemoderivados -->
		<table>
		<tr><th>CEEC</th><th>&nbsp;&nbsp;HGS</th>
		</table></td><td><!--Conclusiones --> 
		<textarea name="observaciones" id="observaciones" cols="22" rows="7" wrap="VIRTUAL"> <?php echo "$obser_n"?> </textarea></td></tr>
		<tr>
			<td></td>
			<td>EDAD <input type="text" name="edad" id="edad"onkeyup="saltar(event,'sexo')" onkeypress="return pulsar(event)" value="<?php echo "$edad_n"?>"/></td>
			<td>PAM <input type="text" size="2"id="pam"name="pam"onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)" value="<?php echo "$pam_n"?>"/></td>
			<td>RASS <input type="text"size="2" name="rass" id="rass"onkeyup="saltar(event,'ramsay')"onkeypress="return pulsar(event)" value="<?php echo "$rass_n"?>"/></td>
			<td>MV <select name="mv"> 
				<option value="<?php echo "$mv_n"?>"><?php echo "$mv_n"?></option>
			</select></td>
			<td>AMINAS<input type="text" size="6"name="aminas"id="aminas"onkeyup="saltar(event,'sedacion')"onkeypress="return pulsar(event)" value="<?php echo "$aminas_n"?>" /></td>
			<td>QS <input type="checkbox" name="qs" value="2"id="qs"onkeyup="saltar(event,'elts')"onkeypress="return pulsar(event)" <?php if($qs_n==1){echo 'checked';}?> /></td><td></td><td><table><tr><th>PG</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG</th></tr></table></td></tr>
		<tr><td></td>
			<td>SEXO <input type="tex" name="sexo" id="sexo"onkeyup="saltar(event,'diagnostico')"onkeypress="return pulsar(event)"onkeypress="return pulsar(event)" value="<?php echo "$sexo_n"?>"/></td>
			<td>FC <input type="text" size="2" name="fc" id="fc"onkeyup="saltar(event,'so2')"onkeypress="return pulsar(event)" value="<?php echo "$fc_n"?>"/></td>
			<td>RAMSAY <input type="text"size="2" name="ramsay" id="ramsay"onkeyup="saltar(event,'braden')"onkeypress="return pulsar(event)" value="<?php echo "$ramsay_n"?>"/></td>
			<td>FiO2% <input type="text" size="4" name="fio2" id="fio2" onkeyup="saltar(event,'so2vo')"onkeypress="return pulsar(event)" value="<?php echo "$fio2_n"?>"/></td>
			<td>SEDACION<input type="text" size="6" name="sedacion" id="sedacion" onkeyup="saltar(event,'sv')"onkeypress="return pulsar(event)" value="<?php echo "$sedacion_n"?>"/></td>
			<td>ELTS <input type="checkbox" name="elts" value="3"id="elts"onkeyup="saltar(event,'tp')"onkeypress="return pulsar(event)" <?php if($elts_n==1){echo 'checked';}?> /></td><td></td><td><table><tr>
				<td><input type="text" size="1" name="pg1" id="pg1"onkeyup="saltar(event,'pg2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_pg_n"?>"/></td>
				<td><input type="text" size="1" name="pg2" id="pg2"onkeyup="saltar(event,'pfc1')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_pg_n"?>"/></td></tr></table></td>
		</tr>
		<tr>
			<td></td>
			<td>DIAGNÓSTICO <input type="text" name="diagnostico" id="diagnostico" onkeyup="saltar(event,'lreferencia')"onkeypress="return pulsar(event)" value="<?php echo "$diagnostico_n"?>"/></td>
			<td>SO2 <input type="text"size="2"name="so2"id="so2"  onkeyup="copiar2()"onkeypress="return pulsar(event)" value="<?php echo "$so2_n"?>" /></td>
			<td>BRADEN <input type="text"size="2" name="braden" id="braden"onkeyup="saltar(event,'crichton')"onkeypress="return pulsar(event)" value="<?php echo "$braden_n"?>"/></td>
			<td>SO2 <input type="text"size="4" name="so2vo" id="so2vo"onkeyup="saltar(event,'antb1')"onkeypress="return pulsar(event)" value="<?php echo "$so2_n"?>"/></td>
			<td><table><th>S/D</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F.I.</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC</th></table></td><td>TP&nbsp;&nbsp;<input type="checkbox" name="tp" value="4" id="tp" onkeyup="saltar(event,'tpt')" onkeypress="return pulsar(event)" <?php if($tp_n==1){echo 'checked';}?>/></td><td></td><td><table><th>PFC</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PFC</th></table></td></tr>
		<tr><td></td>
			<td>L. REFERENCIA <input type="text" name="lreferencia" id="lreferencia" onkeyup="saltar(event,'ingreso')"onkeypress="return pulsar(event)" value="<?php echo "$lugar_referencia_n"?>"/></td>
			<td>FR <input type="text" size="2" name="fr" id="fr"onkeyup="saltar(event,'tem')"onkeypress="return pulsar(event)" value="<?php echo "$fr_n"?>"/></td>
			<td>CRICHTON <input type="text"size="2"name="crichton"id="crichton"onkeyup="saltar(event,'tiss')"onkeypress="return pulsar(event)" value="<?php echo "$crichton_n"?>"/></td>
		<!-- Tabla antibióticos -->
		<td>
		<table>
		<tr><th>ANTIBIÓTICOS</th><th>&nbsp;&nbsp;&nbsp;&nbsp;DÍAS</th></tr>
		</table>
		<td><table>
			<td>S.V&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sv" value="1" id="sv"onkeyup="saltar(event,'sng')"onkeypress="return pulsar(event)" <?php if($sv_n==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi" id="fi" onkeyup="saltar(event,'fi2')"onkeypress="return pulsar(event)" value="<?php echo "$fi1_n"?>"/></td>
			<td><input type="text" size="1" name="fc1" id="fc1"onkeyup="saltar(event,'fc2')"onkeypress="return pulsar(event)" value="<?php echo "$fc1_n"?>"/></td></table></td>
			<td>TPT<input type="checkbox" name="tpt" value="5"id="tpt"onkeyup="saltar(event,'cpk')"onkeypress="return pulsar(event)" <?php if($tpt_n==1){echo 'checked';}?>/><td></td>
			<td><table>
				<td><input type="text" size="1" name="pfc1" id="pfc1"onkeyup="saltar(event,'pfc2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_pfc_n"?>"/></td>
				<td><input type="text" size="1" name="pfc2" id="pfc2"onkeyup="saltar(event,'cp1')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_pfc_n"?>"/></td>
				</table></td></td>
		</td>
	</tr>
		<tr><td></td>
			<td>FECHA DE INGRESO <input type="date" name="ingreso" id="ingreso"onkeyup="saltar(event,'evento')"onkeypress="return pulsar(event)" value="<?php echo "$fecha_ingreso_n"?>"/></td>
			<td>TEM <input type="text"size="2"name="tem"id="tem"onkeyup="saltar(event,'pvc')"onkeypress="return pulsar(event)" value="<?php echo "$tem_n"?>"/></td>
			<td>TISS <input type="text"size="2" name="tiss" id="tiss"onkeyup="saltar(event,'clase')"onkeypress="return pulsar(event)" value="<?php echo "$tiss_n"?>"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text" size="10" name="antb1" id="antb1"onkeyup="saltar(event,'dia1')"onkeypress="return pulsar(event)" value="<?php echo "$ant1_n"?>"/></td>
			<td> <input type="text" size="1" name="dia1" id="dia1"onkeyup="saltar(event,'antb2')"onkeypress="return pulsar(event)" value="<?php echo "$dia1_n"?>"/></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>S.NG. <input type="checkbox" value="1" name="sng" id="sng" onkeyup="saltar(event,'sog')"onkeypress="return pulsar(event)" <?php if($sng_n==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi2" id="fi2" onkeyup="saltar(event,'fi3')"onkeypress="return pulsar(event)" value="<?php echo "$fi2_n"?>" /></td>
			<td><input type="text" size="1" name="fc2" id="fc2" onkeyup="saltar(event,'fc3')"onkeypress="return pulsar(event)" value="<?php echo "$fc2_n"?>" /></td></table></td>
			<td>CPK<input type="checkbox" name="cpk" value="6" id="cpk" onkeyup="saltar(event,'ego')"onkeypress="return pulsar(event)" <?php if($cpk_n==1){echo 'checked';}?> /><td></td><td><table><th>CP</th><th>CP</th></table></td></td>
		</td></tr>
		<tr><td></td>
			<td>DÍA DEL EVENTO <input type="date" name="evento" id="evento"onkeyup=" saltar(event,'fnacimiento')" onkeypress="return pulsar(event)" value="<?php echo "$fecha_evento_n"?>" /></td>
			<td>PVC <input type="text"size="2" name="pvc" id="pvc" onkeyup="saltar(event,'iu')" onkeypress="return pulsar(event)" value="<?php echo "$pvc_n"?>" /></td>
			<td>CLASE <input type="text"size="2" name="clase" id="clase" onkeyup="saltar(event,'dieta')"onkeypress="return pulsar(event)" value="<?php echo "$clase_n"?>" /></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10" name="antb2" id="antb2"onkeyup="saltar(event,'dia2')"onkeypress="return pulsar(event)" value="<?php echo "$ant2_n"?>" /></td>
			<td><input type="text" size="1" name="dia2" id="dia2"onkeyup="saltar(event,'antb3')"onkeypress="return pulsar(event)" value="<?php echo "$dia2_n"?>" /></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>S.OG.<input type="checkbox" value="1" name="sog" id="sog"onkeyup="saltar(event,'te')"onkeypress="return pulsar(event)" <?php if($sog_n==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi3" id="fi3" onkeyup="saltar(event,'fi4')"onkeypress="return pulsar(event)" value="<?php echo "$fi3_n"?>" /></td>
			<td><input type="text" size="1" name="fc3" id="fc3" onkeyup="saltar(event,'fc4')"onkeypress="return pulsar(event)" value="<?php echo "$fc3_n"?>" /></td></table></td>
			<td>EGO<input type="checkbox" name="ego" value="7" id="ego" onkeyup="saltar(event,'culti')"onkeypress="return pulsar(event)" <?php if($ego_n==1){echo 'checked';}?>/>
				<td></td><td><table>
					<td><input type="text" size="1" name="cp1" id="cp1"onkeyup="saltar(event,'cp2')"onkeypress="return pulsar(event)" value="<?php echo "$cecc_cp_n"?>" /></td>
					<td><input type="text" size="1" name="cp2" id="cp2"onkeyup="saltar(event,'observaciones')"onkeypress="return pulsar(event)" value="<?php echo "$hgs_cp_n"?>" /></td></table></td></td>
		</td></tr>
		<tr><td></td>
			<td>FECHA DE NACIMIENTO <input type="date" name="fnacimiento" id="fnacimiento" onkeyup="saltar(event,'noexpediente')"onkeypress="return pulsar(event)" value="<?php echo "$fecha_nacimiento_n"?>" /></td>
			<td>UI <input type="text" size="2" name="iu" id="iu" onkeyup="saltar(event,'dx')" onkeypress="return pulsar(event)" value="<?php echo "$iu_n"?>" /></td>
			<td><strong>Estado metabólico</strong></td><td>
		<table>
		<tbody>
		<tr>
			<td> <input type="text" size="10" name="antb3" id="antb3" onkeyup="saltar(event,'dia3')" onkeypress="return pulsar(event)" value="<?php echo "$ant3_n"?>" /></td>
			<td><input type="text" size="1" name="dia3" id="dia3" onkeyup="saltar(event,'antb4')" onkeypress="return pulsar(event)" value="<?php echo "$dia3_n"?>" /></td>
		</tr>
		</tbody>
		</table>
		<td><table>
			<td>T.E.&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="1" name="te" id="te"onkeyup="saltar(event,'cvc')" onkeypress="return pulsar(event)" <?php if($te_n==1){echo 'checked';}?> /></td>
			<td><input type="text" size="1" name="fi4" id="fi4" onkeyup="saltar(event,'fi5')"onkeypress="return pulsar(event)" value="<?php echo "$fi4_n"?>" /></td>
			<td><input type="text" size="1" name="fc4" id="fc4" onkeyup="saltar(event,'fc5')"onkeypress="return pulsar(event)" value="<?php echo "$fc4_n"?>" /></td></table></td>
			<td>CULTI<input type="checkbox" name="culti" value="8"id="culti"onkeyup="saltar(event,'otro')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td>
			<td>NO. EXPEDIENTE <input type="text" name="noexpediente" id="noexpediente" value="<?php echo "$n_expediente_n"?>" onkeyup="saltar(event,'nospp')"onkeypress="return pulsar(event)"/> </td>
			<td>DX <input type="text" size="2" name="dx" id="dx"onkeyup="saltar(event,'pia')"onkeypress="return pulsar(event)" value="<?php echo "$dx_n"?>" /></td>
			<td>DIETA <input type="text" name="dieta" id="dieta"onkeyup="saltar(event,'ayuno')"onkeypress="return pulsar(event)" value="<?php echo "$dieta_n"?>"/></td><td>
		<table>
		<tbody>
		<tr>
			<td><input type="text" size="10" name="antb4" id="antb4" onkeyup="saltar(event,'dia4')"onkeypress="return pulsar(event)" value="<?php echo "$ant4_n"?>"/></td>
			<td><input type="text" size="1" name="dia4" id="dia4" onkeyup="saltar(event,'antb5')"onkeypress="return pulsar(event)" value="<?php echo "$dia4_n"?>" /></td></tr>
		</tbody>
		</table>
		<td><table>
			<td>CVC&nbsp;&nbsp;<input type="checkbox" value="1" name="cvc" id="cvc" onkeyup="saltar(event,'cvp')"onkeypress="return pulsar(event)" <?php if($cvc_v==1){echo 'checked';}?> /></td>
			<td><input type="text" name="fi5" id="fi5" onkeyup="saltar(event,'fi6')"onkeypress="return pulsar(event)" size="1" value="<?php echo "$fi5_n"?>"/></td>
			<td><input type="text" name="fc5"  id="fc5" size="1" onkeyup="saltar(event,'fc6')"onkeypress="return pulsar(event)" value="<?php echo "$fc5_n"?>"/></td></table></td>
			<td>OTRO<input type="checkbox" name="otro" value="8"id="otro"onkeyup="saltar(event,'rx')"onkeypress="return pulsar(event)" <?php if($otro_n==1){echo 'checked';}?>/></td>
		</td></tr>
		<tr><td></td>
			<td>NO. SPP <input type="text" name="nospp" id="nospp" onkeyup="saltar(event,'ta1')" onkeypress="return pulsar(event)" value="<?php echo "$numero_seguro_n"?>" /></td>
			<td>PIA <input type="text" size="2" name="pia" id="pia" onkeyup="saltar(event,'glasgow')" onkeypress="return pulsar(event)" value="<?php echo "$pia_n"?>" /></td>
			<td>AYUNO <input type="text" name="ayuno" id="ayuno" onkeyup="saltar(event,'vm')" onkeypress="return pulsar(event)" value="<?php echo "$ayuno_n"?>" /></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text" size="10" name=" antb5" id="antb5" onkeyup="saltar(event,'dia5')"onkeypress="return pulsar(event)" value="<?php echo "$ant5_n"?>" /></td>
			<td><input type="text" size="1" name="dia5" id="dia5" onkeyup="saltar(event,'antib')"onkeypress="return pulsar(event)" value="<?php echo "$dia5_n"?>"/></table>
				<td><table>
					<td>CVP&nbsp;<input type="checkbox" value="1" name="cvp" id="cvp" onkeyup="saltar(event,'fi')"onkeypress="return pulsar(event)" <?php if($cvp_n==1){echo 'checked';}?> /></td>
					<td><input type="text" name="fi6" id="fi6" size="1" onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)" value="<?php echo "$fi6_n"?>"/></td>
					<td><input type="text" size="1" name="fc6" id="fc6" onkeyup="saltar(event,'bh')"onkeypress="return pulsar(event)" value="<?php echo "$fc6_n"?>" /></td>
				</table></td><td></td>
		</tbody>
		</td></tr>
		</tbody>
		</table>
		<br><br>
</body>
</html>