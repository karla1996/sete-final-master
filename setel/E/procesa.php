<?php
//header("Location: http://localhost/SETEL/E/E_index.php"); 
$link = mysqli_connect("localhost", "root", "", "setel")
	or die ("ERROR EN LA CONEXIÓN");
	
/*DATOS GENERALES*/
$n_expediente=$_POST['noexpediente'];
$id_enfermero=$_POST['idenfermero'];
$fecha=$_POST['fecha'];
$turno=$_POST['turno'];
$paciente=$_POST['tipo_paciente'];
$cama=$_POST['cama'];
$unidad=$_POST['unidad'];



/* DATOS DEL PACIENTE */
$nombre_pa=$_POST['nombre'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$diagnostico=$_POST['diagnostico'];
$lugar_referencia=$_POST['lreferencia'];
$fecha_ingreso=$_POST['ingreso'];
$fecha_evento=$_POST['evento'];
$fecha_nacimiento=$_POST['fnacimiento'];
$numero_seguro=$_POST['nospp'];
if($nombre_pa==""){
	$nombre_pa=0;
	}else{if($edad==""){
		$edad=0;
	}else{
		if($sexo==""){
			$sexo=0;
		}else{
			if($diagnostico==""){
					$diagnostico=0;
			}else{
				if($lugar_referencia==""){
					$lugar_referencia=0;
				}else{
					if($fecha_ingreso==""){
						$fecha_ingreso=0;
					}else{
						if($fecha_evento==""){
							$fecha_evento=0;
						}else{
							if($fecha_nacimiento==""){
								$fecha_nacimiento=0;
							}else{
								if($numero_seguro==""){
									$numero_seguro=0;
								}
							}
						}
					}
				}
			}
		}
	}
}

/*ESTADO HEMODINAMICO*/
$ta_1=$_POST['ta1'];
$ta_2=$_POST['ta2'];
$pam=$_POST['pam'];
$fc=$_POST['fc'];
$so2=$_POST['so2'];
$fr=$_POST['fr'];
$tem=$_POST['tem'];
$pvc=$_POST['pvc'];
$iu=$_POST['iu'];
$dx=$_POST['dx'];
$pia=$_POST['pia'];
if($ta_1==""){
	$ta_1=0;
}else{
	if($ta_2==""){
	$ta_2=0;
	}else{
		if($pam==""){
			$pam=0;
		}else{
			if($fc==""){
				$fc=0;
			}else{
				if($so2==""){
					$so2=0;
				}else{
					if($fr==""){
						$fr=0;
					}else{
						if($tem==""){
							$tem=0;
						}else{
							if($pvc==""){
								$pvc=0;
							}else{
								if($iu==""){
									$iu=0;
								}else{
									if($dx==""){
										$dx=0;
									}else{
										if($pia==""){
											$pia=0;
										}
									}
								}
							}
						}
					}
				}
			}
		}
}
}
/*ESTADO NEUROLOGICO*/
$glasgow=$_POST['glasgow'];
$rass=$_POST['rass'];
$ramsay=$_POST['ramsay'];
$braden=$_POST['braden'];
$crichton=$_POST['crichton'];
$tiss=$_POST['tiss'];
$clase=$_POST['clase'];

if($glasgow==""){
	$glasgow=0;
}if($rass==""){
	$rass=0;
}if($ramsay==""){
	$ramsay=0;
}if($braden==""){
	$braden=0;
}if($crichton==""){
	$crichton=0;
}if($tiss==""){
	$tiss=0;
}if($clase==""){
	$clase=0;
}

/*ESTADO METABOLICO*/
$dieta=$_POST['dieta'];
$ayuno=$_POST['ayuno'];
if($dieta==""){
	$dieta=0;
}else{
	if($ayuno==""){
		$ayuno=0;
	}
}
/*VENTILACIÓN/OXÍGENO*/
$vm=$_POST['vm'];
$mv=$_POST['mv'];
$fio2=$_POST['fio2'];
$so2vo=$_POST['so2vo'];

/*ANTIBIOTICOS*/
$ant1=$_POST['antb1'];
$ant2=$_POST['antb2'];
$ant3=$_POST['antb3'];
$ant4=$_POST['antb4'];
$ant5=$_POST['antb5'];

if($ant1==""){
	$ant1=0;
}
if($ant2==""){
	$ant2=0;
}
if($ant3==""){
	$ant3=0;
}
if($ant4==""){
	$ant4=0;
}
if($ant5==""){
	$ant5=0;
}
/*DÍAS*/
$dia1=$_POST['dia1'];
$dia2=$_POST['dia2'];
$dia3=$_POST['dia3'];
$dia4=$_POST['dia4'];
$dia5=$_POST['dia5'];

if($dia1==""){
	$dia1=0;
}
if($dia2==""){
	$dia2=0;
}
if($dia3==""){
	$dia3=0;
}
if($dia4==""){
	$dia4=0;
}
if($dia5==""){
	$dia5=0;
}
/*LÍQUIDOS PARENTALES*/
$lsps=$_POST['lsps'];
$aminas=$_POST['aminas'];
$sedacion=$_POST['sedacion'];

if($lsps==""){
	$lsps=0;
}
if($aminas==""){
	$aminas=0;
}
if($sedacion==""){
	$sedacion=0;
}
/*LAB*/
$bh=isset($_POST['bh']) ? $_POST['bh']: null;
if($bh!=1){
	$bh=0;
}
$qs=isset($_POST['qs']) ? $_POST['qs']: null;
if($qs!=2){
	$qs=0;
}
$elts=isset($_POST['elts']) ? $_POST['elts']: null;
if($elts!=3){
	$qs=0;
}
$tp=isset($_POST['tp']) ? $_POST['tp']: null;
if($tp!=4){
	$tp=0;
}
$tpt=isset($_POST['tpt']) ? $_POST['tpt']: null;
if($tpt!=5){
	$tp=0;
}
$cpk=isset($_POST['cpk']) ? $_POST['cpk']: null;
if($cpk!=6){
	$cpk=0;
}
$ego=isset($_POST['ego']) ? $_POST['ego']: null;
if($ego!=7){
	$ego=0;
}
$culti=isset($_POST['culti']) ? $_POST['culti']: null;
if($culti!=8){
	$culti=0;
}
$otro=isset($_POST['otro']) ? $_POST['otro']: null;
if($otro!=9){
	$otro=0;
}
$rx=isset($_POST['rx']) ? $_POST['rx']: null;
if($rx!=10){
	$rx=0;
}
/*HEMODERIVADOS*/
$cecc_pg=$_POST['pg1'];
$cecc_pfc=$_POST['pfc1'];
$cecc_cp=$_POST['cp2'];
$hgs_pg=$_POST['pg2'];
$hgs_pfc=$_POST['pfc2'];
$hgs_cp=$_POST['cp2'];

if($cecc_pg==""){
	$cecc_pg=0;
}
if($cecc_pfc==""){
	$cecc_pfc=0;
}
if($cecc_cp==""){
	$cecc_cp=0;
}
if($hgs_pg==""){
	$hgs_pg=0;
}
if($hgs_pfc==""){
	$hgs_pfc=0;
}
if($hgs_cp==""){
	$hgs_cp=0;
}
/*OBSERVACIONES*/
$obser=$_POST['observaciones'];
if($obser==""){
	$obser=0;
}

/*SD*/
$sv=isset($_POST['sv']) ? $_POST['sv']: null;
if($sv!=1){
	$sv=0;
}
$sng=isset($_POST['sng']) ? $_POST['sng']: null;
if($sng!=1){
	$sng=0;
}
$sog=isset($_POST['sog']) ? $_POST['sog']: null;
if($sog!=1){
	$sog=0;
}
$te=isset($_POST['te']) ? $_POST['te'] : null;
if($te!=1){
	$te=0;
}
$cvc=isset($_POST['cvc']) ? $_POST['cvc'] : null;
if($cvc!=1){
	$cvc=0;
}
$cvp=isset($_POST['cvp']) ? $_POST['cvp'] : null;
if($cvp!=1){
	$cvp=0;
}

/*FI*/
$fi1=$_POST['fi'];
if($fi1==""){
	$fi1=0;
}
$fi2=$_POST['fi2'];
if($fi2==""){
	$fi2=0;
}
$fi3=$_POST['fi3'];
if($fi3==""){
	$fi3=0;
}
$fi4=$_POST['fi4'];
if($fi4==""){
	$fi4=0;
}
$fi5=$_POST['fi5'];
if($fi5==""){
	$fi5=0;
}
$fi6=$_POST['fi6'];
if($fi6==""){
	$fi6=0;
}
/* FC */
$fc1=$_POST['fc1'];
if($fc1==""){
	$fc1=0;
}
$fc2=$_POST['fc2'];
if($fc2==""){
	$fc2=0;
}
$fc3=$_POST['fc3'];
if($fc3==""){
	$fc3=0;
}
$fc4=$_POST['fc4'];
if($fc4==""){
	$fc4=0;
}
$fc5=$_POST['fc5'];
if($fc5==""){
	$fc5=0;
}
$fc6=$_POST['fc6'];
if($fc6==""){
	$fc6=0;
}

$query=("INSERT into Datos_del_paciente values ('$nombre_pa','$edad','$sexo','$diagnostico','$lugar_referencia','$fecha_ingreso','$fecha_evento','$fecha_nacimiento','$n_expediente','$numero_seguro','$id_enfermero','$fecha','$turno','$paciente','$cama',null,now(),'$ta_1','$ta_2','$pam','$fc','$so2','$fr','$tem','$pvc','$iu','$dx','$pia','$glasgow','$rass','$ramsay','$braden','$crichton','$tiss','$clase','$dieta','$ayuno','$vm','$mv','$fio2','$so2vo','$bh','$qs','$elts','$tp','$tpt','$cpk','$ego','$culti','$otro','$rx','$cecc_pg','$hgs_pg','$cecc_pfc','$hgs_pfc','$cecc_cp','$hgs_cp','$obser','$lsps','$aminas','$sedacion','$unidad','$ant1','$ant2','$ant3','$ant4','$ant5','$dia1','$dia2','$dia3','$dia4','$dia5','$sv','$sng','$sog','$te','$cvc','$cvp','$fi1','$fi2','$fi3','$fi4','$fi5','$fi6','$fc1','$fc2','$fc3','$fc4','$fc5','$fc6')");


echo $query;


$fecha=$_POST['evento'];
echo $fecha;
$resultado=mysqli_query($link,$query)
	or die("ERROR AL INSERTAR");
//close connection
mysqli_close($link);
echo "GUARDADO";

?>