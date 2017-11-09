<?php
include("conexion1.php");
		
  $id=$_REQUEST['id'];
  $fec_ingre=$_POST['fecha']; 
  $eda=$_POST['edad'];
  $lu_ref=$_POST['lu_ref']; 
  $cam=$_POST['cama'];
  $nom=$_POST['nombre']; 
  $num_spp=$_POST['num_spp'];
  $diagnostico=$_POST['diagno1'];
  $dia_post=$_POST['dia_post'];
  $dia_estancia=$_POST['dia_estancia'];
  $TA1=$_POST['TA1'];
  $TA2=$_POST['TA2'];   
  $FC=$_POST['FC'];
  $FR=$_POST['FR'];
  $TEM=$_POST['TEM'];
  $PVC=$_POST['PVC'];
  $TISS=$_POST['TISS'];
  $UI=$_POST['UI'];
  $GLASGOW=$_POST['GLASGOW'];
  $RASS=$_POST['RASS'];
  $RAMSAY=$_POST['RAMSAY']; 
  $ANTIB=$_POST['ANTIB'];
  $LSPS=$_POST['LSPS'];
  $SEDACION=$_POST['sedacion'];
  $DIETA=$_POST['dieta'];
  $con_paci=$_POST['con_paciente'];
  
 $query= "UPDATE datos_del_paciente SET  fecha_ingreso='$fec_ingre', Edad='$eda', l_referencia='$lu_ref',
 nocama='$cam', Nombre='$nom', No_SPP='$num_spp', Diagnostico='$diagnostico', dia_post='$dia_post', dia_estancia='$dia_estancia',
 ta1='$TA1', ta2='$TA2', fc='$FC',fr='$FR', tem='$TEM', pvc='$PVC', tiss='$TISS', ui='$UI', glasgow='$GLASGOW', rass='$RASS', ramsay='$RAMSAY', 
 ant1='$ANTIB', sedacion='$SEDACION', dieta='$DIETA', con_paciente='$con_paci' WHERE id='$id' ";
 $resultado = $conexion->query($query);
if($resultado){
	header('Location: E_InfoPacienteDirec.php'); 
}else{
	echo "Modificacon no exitosa";
}
  
  
?>