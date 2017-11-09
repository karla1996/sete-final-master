<!DOCTYPE html>
<html>
<head>

<style>

table, th, td {	
	font-size: 10px;
    border: 1px solid black;
    border-collapse: collapse;
	
}
body{
	font-size:11px;
	style="font-family: Arial";
}

</style>
</head>

<body>

<center><strong>CENTRO ESTATAL DE CUIDADOS CRITICOS</strong></center>
<center><strong>UNIDAD DE CUIDADOS INTENSIVOS</strong></center>
<center><strong>MOVIMIENTO DIARIO DE PACIENTES EN </strong></center>
<?php

$link = mysqli_connect("localhost", "root", "root", "setel")
	or die ("ERROR EN LA CONEXIÓN");
//Query de consulta	
$sql = "SELECT * FROM Datos_del_paciente where No_expediente=222 ";

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
			$ant1=$row['antb1'];
			$ant2=$row['antb2'];
			$ant3=$row['antb3'];
			$ant4=$row['antb4'];
			$ant5=$row['antb5'];
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
			$fi1=$row['fi'];
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

mysqli_close($link);
?>
<div  style="text-align: right;">FECHA: <?php echo "$fecha"?></div>
TURNO: <?php echo "$turno"?>
<table >
	
		<thead><tr><tr><th rowspan="3">CAMA</th></tr><th>DATOS DEL PACIENTE</th><th>ESTADO HEMODINAMICO</th><th>ESTADO NEUROLÓGICO</th><th>VENTILACIÓN/OXÍGENO</th><th>LÍQUIDOS PARENTALES</th><th>LAB</th><th>RX</th><th>HEMODERIVADOS</th><th>OBSERVACIONES</th></tr></thead>
		
		<tbody><td></td>
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
		<textarea name="observaciones" id="observaciones" cols="22" rows="7" wrap="VIRTUAL"></textarea></td></tr>
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
			<td>ELTS <input type="checkbox" name="elts" value="3"id="elts"onkeyup="saltar(event,'tp')"onkeypress="return pulsar(event)" <?php if($elts==1){echo 'checked';}?> /></td><td></td><td><table><tr><td><input type="text" size="1" name="pg1" id="pg1"onkeyup="saltar(event,'pg2')"onkeypress="return pulsar(event)" value="<?php echo "$pg1"?>"/></td><td><input type="text" size="1" name="pg2" id="pg2"onkeyup="saltar(event,'pfc1')"onkeypress="return pulsar(event)" value="<?php echo "$pg2"?>"
/></td></tr></table></td>
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
		<td><table><td>S.V&nbsp;&nbsp;&nbsp;<input type="checkbox" name="sv" value="1" id="sv"onkeyup="saltar(event,'sng')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi" id="fi" onkeyup="saltar(event,'fi2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc1" id="fc1"onkeyup="saltar(event,'fc2')"onkeypress="return pulsar(event)"/></td></table></td><td>TPT<input type="checkbox" name="tpt" value="5"id="tpt"onkeyup="saltar(event,'cpk')"onkeypress="return pulsar(event)"/><td></td><td><table><td><input type="text" size="1" name="pfc1" id="pfc1"onkeyup="saltar(event,'pfc2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="pfc2" id="pfc2"onkeyup="saltar(event,'cp1')"onkeypress="return pulsar(event)"/></td></table></td></td>
		</td>
	</tr>
		<tr><td></td><td>FECHA DE INGRESO <input type="date"name="ingreso"id="ingreso"onkeyup="saltar(event,'evento')"onkeypress="return pulsar(event)"/></td><td>TEM <input type="text"size="2"name="tem"id="tem"onkeyup="saltar(event,'pvc')"onkeypress="return pulsar(event)"/></td><td>TISS <input type="text"size="2" name="tiss" id="tiss"onkeyup="saltar(event,'clase')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb1" id="antb1"onkeyup="saltar(event,'dia1')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia1" id="dia1"onkeyup="saltar(event,'antb2')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>S.NG. <input type="checkbox" value="1" name="sng" id="sng" onkeyup="saltar(event,'sog')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi2" id="fi2" onkeyup="saltar(event,'fi3')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc2" id="fc2" onkeyup="saltar(event,'fc3')"onkeypress="return pulsar(event)"/></td></table></td><td>CPK<input type="checkbox" name="cpk" value="6"id="cpk"onkeyup="saltar(event,'ego')"onkeypress="return pulsar(event)"/><td></td><td><table><th>CP</th><th>CP</th></table></td></td>
		</td></tr>
		<tr><td></td><td>DÍA DEL EVENTO <input type="date"name="evento"id="evento"onkeyup="saltar(event,'fnacimiento')"onkeypress="return pulsar(event)"/></td><td>PVC <input type="text"size="2" name="pvc" id="pvc"onkeyup="saltar(event,'iu')"onkeypress="return pulsar(event)"/></td><td>CLASE <input type="text"size="2"name="clase"id="clase"onkeyup="saltar(event,'dieta')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10" name="antb2" id="antb2"onkeyup="saltar(event,'dia2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia2" id="dia2"onkeyup="saltar(event,'antb3')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>S.OG.<input type="checkbox" value="1" name="sog" id="sog"onkeyup="saltar(event,'te')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi3" id="fi3" onkeyup="saltar(event,'fi4')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc3" id="fc3" onkeyup="saltar(event,'fc4')"onkeypress="return pulsar(event)"/></td></table></td><td>EGO<input type="checkbox" name="ego" value="7"id="ego"onkeyup="saltar(event,'culti')"onkeypress="return pulsar(event)"/><td></td><td><table><td><input type="text" size="1" name="cp1" id="cp1"onkeyup="saltar(event,'cp2')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="cp2" id="cp2"onkeyup="saltar(event,'observaciones')"onkeypress="return pulsar(event)"/></td></table></td></td>
		</td></tr>
		<tr><td></td><td>FECHA DE NACIMIENTO <input type="date" name="fnacimiento"id="fnacimiento"onkeyup="saltar(event,'noexpediente')"onkeypress="return pulsar(event)"/></td><td>UI <input type="text"size="2" name="iu" id="iu"onkeyup="saltar(event,'dx')"onkeypress="return pulsar(event)"/></td><td><strong>Estado metabólico</strong></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb3"id="antb3"onkeyup="saltar(event,'dia3')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia3" id="dia3"onkeyup="saltar(event,'antb4')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>T.E.&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="1" name="te" id="te"onkeyup="saltar(event,'cvc')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fi4" id="fi4" onkeyup="saltar(event,'fi5')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc4" id="fc4" onkeyup="saltar(event,'fc5')"onkeypress="return pulsar(event)"/></td></table></td><td>CULTI<input type="checkbox" name="culti" value="8"id="culti"onkeyup="saltar(event,'otro')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td><td>NO. EXPEDIENTE <input type="text" name="noexpediente" id="noexpediente" value="<?php echo "$n_expediente"?>" onkeyup="saltar(event,'nospp')"onkeypress="return pulsar(event)"/> </td><td>DX <input type="text"size="2" name="dx" id="dx"onkeyup="saltar(event,'pia')"onkeypress="return pulsar(event)"/></td><td>DIETA <input type="text" name="dieta" id="dieta"onkeyup="saltar(event,'ayuno')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb4"id="antb4"onkeyup="saltar(event,'dia4')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia4" id="dia4"onkeyup="saltar(event,'antb5')"onkeypress="return pulsar(event)"/></td></tr>
		</tbody>
		</table>
		<td><table><td>CVC&nbsp;&nbsp;<input type="checkbox" value="1" name="cvc" id="cvc" onkeyup="saltar(event,'cvp')"onkeypress="return pulsar(event)"/></td><td><input type="text" name="fi5" id="fi5" onkeyup="saltar(event,'fi6')"onkeypress="return pulsar(event)" size="1"/></td><td><input type="text" name="fc5"  id="fc5" size="1" onkeyup="saltar(event,'fc6')"onkeypress="return pulsar(event)"/></td></table></td><td>OTRO<input type="checkbox" name="otro" value="8"id="otro"onkeyup="saltar(event,'rx')"onkeypress="return pulsar(event)"/></td>
		</td></tr>
		<tr><td></td><td>NO. SPP <input type="text"name="nospp"id="nospp"onkeyup="saltar(event,'ta1')"onkeypress="return pulsar(event)"/></td><td>PIA <input type="text"size="2" name="pia" id="pia"onkeyup="saltar(event,'glasgow')"onkeypress="return pulsar(event)"/></td><td>AYUNO <input type="text"name="ayuno" id="ayuno"onkeyup="saltar(event,'vm')"onkeypress="return pulsar(event)"/></td><td>
		<table>
		<tbody>
		<tr><td> <input type="text"size="10"name="antb5"id="antb5"onkeyup="saltar(event,'dia5')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="dia5" id="dia5"onkeyup="saltar(event,'antib')"onkeypress="return pulsar(event)"/></table><td><table><td>CVP&nbsp;<input type="checkbox" value="1" name="cvp" id="cvp" onkeyup="saltar(event,'fi')"onkeypress="return pulsar(event)"/></td><td><input type="text" name="fi6" id="fi6" size="1" onkeyup="saltar(event,'fc')"onkeypress="return pulsar(event)"/></td><td><input type="text" size="1" name="fc6" id="fc6" onkeyup="saltar(event,'bh')"onkeypress="return pulsar(event)"/></td></table></td><td></td>
		</tbody>
		</table>
		</td></tr>
		</tbody>
		</table>
	
</body>
</html>