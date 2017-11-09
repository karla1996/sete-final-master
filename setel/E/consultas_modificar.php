<?php
//header("Location: http://localhost/SETEL/E/E_index.php"); 
$link = mysqli_connect("localhost", "root", "", "setel")
	or die ("ERROR EN LA CONEXIÓN");
	
  $No_expediente=$_REQUEST['No_expediente'];
  $idenfermero=$_POST['idenfermero'];
  $turn=$_POST['turno'];
  $paciente=$_POST['tipo_paciente'];
  $unidad=$_POST['unidad'];
  $cam=$_POST['cama'];
  $nom=$_POST['nombre']; 
  $eda=$_POST['edad'];
  $sexo=$_POST['cmbSexo'];   
  $diagnostico=$_POST['diagnostico'];
  $lu_ref=$_POST['lreferencia']; 
  $fecha_ingre=$_POST['ingreso'];
  $dia_eve=$_POST['evento'];
  $fec_naci=$_POST['fnacimiento'];
  $num_expe=$_POST['noexpediente'];
  $num_spp=$_POST['nospp'];
  $TA1=$_POST['ta1'];
  $TA2=$_POST['ta2']; 
  $PAM=$_POST['pam'];
  $FC=$_POST['fc'];
  $SO2=$_POST['so2'];
  $FR=$_POST['fr'];
  $TEM=$_POST['tem'];  
  $PVC=$_POST['pvc'];
  $UI=$_POST['iu'];
  $DX=$_POST['dx'];
  $PIA=$_POST['pia'];
  $GLASGOW=$_POST['glasgow'];
  $RASS=$_POST['rass'];
  $RAMSAY=$_POST['ramsay'];
  $BRADEN=$_POST['braden'];
  $CRICHTON=$_POST['crichton'];
  $TISS=$_POST['tiss'];
  $CLASE=$_POST['clase'];
  $DIETA=$_POST['dieta'];
  $AYUNO=$_POST['ayuno'];
  $VM=$_POST['vm'];
  $MV=$_POST['mv'];
  $FiO2=$_POST['fio2'];
  $ANTIB1=$_POST['ant1'];
  $ANTIB2=$_POST['ant2'];
  $ANTIB3=$_POST['ant3'];
  $ANTIB4=$_POST['ant4'];
  $ANTIB5=$_POST['ant5'];
  $dia1=$_POST['dia1'];
  $dia2=$_POST['dia2'];
  $dia3=$_POST['dia3'];
  $dia4=$_POST['dia4'];
  $dia5=$_POST['dia5'];
  $LSPS=$_POST['lsps'];
  $AMINAS=$_POST['aminas'];
  $SEDACION=$_POST['sedacion'];
  $BH=$_POST['bh'];
  $ELTS=$_POST['elts'];
  $TP=$_POST['tp'];
  $TPT=$_POST['tpt'];
  $CPK=$_POST['cpk'];
  $RX=$_POST['rx'];
  $PG1=$_POST['pg1'];
  $PG2=$_POST['pg2'];
  $PFC1=$_POST['pfc1'];
  $PFC2=$_POST['pfc2'];
  $CP1=$_POST['cp1'];
  $CP2=$_POST['cp2'];
  
 $query= "UPDATE datos_del_paciente SET turno='$turn', No_expediente='$num_expe', nocama='$cam',Nombre='$nom', Sexo='$sexo', Diagnostico='$diagnostico', l_referencia='$lu_ref', dia_evento='$dia_eve',F_nacimiento='$fec_naci',No_SPP='$num_spp',ta1='$TA1', ta2='$TA2', pam='$PAM', fc='$FC', so2='$SO2', fr='$FR', tem='$TEM', pvc='$PVC', ui='$UI',dx='$DX', pia='$PIA', glasgow='$GLASGOW', rass='$RASS', ramsay='$RAMSAY', braden='$BRADEN', crichton='$CRICHTON', tiss='$TISS', clase='$CLASE', dieta='$DIETA', ayuno='$AYUNO', vm='$VM', mv='$MV', fio2='$FiO2',ant1='$ANTIB1',ant2='$ANTIB2',ant3='$ANTIB3',ant4='$ANTIB4',ant5='$ANTIB5',dia1='$dia1',dia2='$dia2',dia3='$dia3',dia4='$dia4',dia5='$dia5',lsps='$LSPS', aminas='$AMINAS', sedacion='$SEDACION', bh='$BH', elts='$ELTS', tp='$TP', tpt='$TPT', cpk='$CPK', rx='$RX', pg_cecc='$PG1', pg_hgs='$PG2', pfc_cecc='$PFC1', pfc_hgs='$PFC2', cp_cecc='$CP1', cp_hgs='$CP2'  WHERE No_expediente='$No_expediente' ";


echo $query;


$fecha=$_POST['evento'];
echo $fecha;
$resultado=mysqli_query($link,$query)
	or die("ERROR AL INSERTAR");
//close connection
mysqli_close($link);
header('Location: E_Modificar.php'); 
echo "GUARDADO";
  
  
 

?>