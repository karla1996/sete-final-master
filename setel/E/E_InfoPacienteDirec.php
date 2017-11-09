<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	<style> 
table, th{
        border: 1px solid rgb(10,150,10);
		            border-top: 10px solid blue;
					color: black;
            padding: 10px;

      }
h3{
	  color: rgb(10, 200, 10);
}
        


   </style>
   
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
                        <h2 style="color:#317ba0";><strong>&nbsp;&nbsp;MODIFICACIÓN DE PACIENTES</strong></h2>
						<hr aling="left">
						</div>
                    
			<!-- Datos del paciente -->
				<div class="col-md-10"> 
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
				<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
				<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
			
			  <form action="consultas_informe.php" method="POST">
			  Altas: <input type="text" name="altas" /> 	</br>			
			  Referencia: <input type="text" name="refencia" /> </br>
			  Defucion: <input type="text" name="defucion" /> </br>
			  Contrarreferencia: <input type="text" name="contra" /> </br>
		      Cirugias programadas: <input type="text" name="ciru_progra" /> 
		      Realizada: <input type="text" name="ciru_reali" /> 
			  Suspendidas: <input type="text" name="ciru_susp" /> </br>
			  Camas disponibles UCI: <input type="text" name="camas_uci" /> 
			  Quemados: <input type="text" name="camas_que" /> 
			  <input type="submit" value="Registrar" name="btnRegistrar"> 
			  </form>
                </br>
				
              	<div class="row">
               <a href="E_PDF.php" class="button round">Imprimir</a>
              </div>
              <table >
                <thead>
                  <tr>
					
					
					<th width="100">Fecha Ingreso</th>
					<th width="100">Edad</th>
					<th width="150">Cama y Nombre</th>
					<th width="150">Lugar de referencia</th>
					<th width="150">Diagnostico</th>
					<th width="200" colspan="2">Cuidados especiales</th>
					<th width="150">Tratamiento</th>				
					<th width="150">Condicion del paciente</th>
					
                  </tr>
                </thead>
				<tbody>
				<?php
				include("conexion1.php");
				$query="SELECT * FROM datos_del_paciente WHERE fecha=(SELECT MAX(fecha) FROM datos_del_paciente) and turno='tnoche' AND tipo_paciente='Adulto'";
				$resultado=$conexion->query($query);
				while($user = $resultado->fetch_assoc()) {
				?>
                
                  <tr>
					<td rowspan="2"><?php echo $user['fecha_ingreso'];   ?></td>
                    <td rowspan="2"><?php echo $user['Edad']; ?></td>
                    <td rowspan="2"><?php echo $user['nocama']; ?></br>
					<?php echo $user['Nombre']; ?></br>
					<?php echo $user['No_SPP']; ?></td>
                    <td rowspan="2"><?php echo $user['l_referencia']; ?></td>
					<td><?php echo $user['Diagnostico']; ?></td>
					<td rowspan="2">TA: <?php echo $user['ta1']; ?> <?php echo $user['ta2']; ?> FC: <?php echo $user['fc']; ?> FR: <?php echo $user['fr']; ?></br>
					TEMP: <?php echo $user['tem']; ?> PVC: <?php echo $user['pvc']; ?> GLUC <?php echo $user['culti']; ?> </br>
					TISS: <?php echo $user['tiss']; ?></br>IU:<?php echo $user['ui']; ?>
					</td>			
					<td rowspan="2">REQ. Energetico: <?php echo $user['pia']; ?> </br> GLASGOW: <?php echo $user['glasgow']; ?> </br>RASS: <?php echo $user['rass']; ?></br> RAMSAY: <?php echo $user['ramsay']; ?></td>
					<td rowspan="2">ANTIB: <?php echo $user['ant1']; ?> <?php echo $user['dia1']; ?> <?php echo $user['ant2']; ?> <?php echo $user['dia2']; ?> <?php echo $user['ant3']; ?> <?php echo $user['dia3']; ?> <?php echo $user['ant4']; ?> <?php echo $user['dia4']; ?> <?php echo $user['ant5']; ?> <?php echo $user['dia5']; ?></br>LSPS: <?php echo $user['lsps']; ?></br> SEDACION: <?php echo $user['sedacion']; ?>DIETA: <?php echo $user['dieta']; ?> <?php echo $user['ayuno']; ?></td>
					<td rowspan="2"><?php echo $user['con_paciente']; ?></td>
					
					
                    	 <td>
                      <a href="E_Modificar_informe.php?id=<?php echo $user['id']; ?>" rowspan="2" >Modificar</a>
                    </td>
							
                  </tr>
				  <tr>
				  <td> Dias Post Evento: <?php echo $user['dia_post']; ?></br> Dias de Estancia: <?php echo $user['dia_estancia']; ?></td>
				  </tr>
                  <?php
                }
                  ?>
                 <tr>
					
					
					<th width="100">Fecha Ingreso</th>
					<th width="100">Edad</th>
					<th width="150">Cama y Nombre</th>
					<th width="150">Lugar de referencia</th>
					<th width="150">Diagnostico</th>
					<th width="200" colspan="2">Cuidados especiales</th>
					<th width="150">Tratamiento</th>				
					<th width="150">Condicion del paciente</th>
					
                  </tr>
                </thead>
				<tbody>
				<?php
				include("conexion1.php");
				$query="SELECT * FROM datos_del_paciente WHERE fecha=(SELECT MAX(fecha) FROM datos_del_paciente) and turno='tnoche' AND tipo_paciente='pediatria'";
				$resultado=$conexion->query($query);
				while($user = $resultado->fetch_assoc()) {
				?>
                
                   <tr>
					<td rowspan="2"><?php echo $user['fecha_ingreso'];   ?></td>
                    <td rowspan="2"><?php echo $user['Edad']; ?></td>
                    <td rowspan="2"><?php echo $user['nocama']; ?><br/><?php echo $user['Nombre']; ?><br/><?php echo $user['No_SPP']; ?></td>
                    <td rowspan="2"><?php echo $user['l_referencia']; ?></td>
					<td><?php echo $user['Diagnostico']; ?></td>
					<td rowspan="2">TA: <?php echo $user['ta1']; ?> <?php echo $user['ta2']; ?> FC: <?php echo $user['fc']; ?> FR: <?php echo $user['fr']; ?></br>
					TEMP: <?php echo $user['tem']; ?> PVC: <?php echo $user['pvc']; ?> GLUC <?php echo $user['culti']; ?> </br>
					TISS: <?php echo $user['tiss']; ?></br>IU:<?php echo $user['ui']; ?>
					</td>			
					<td rowspan="2">REQ. Energetico: <?php echo $user['pia']; ?> </br> GLASGOW: <?php echo $user['glasgow']; ?> </br>RASS: <?php echo $user['rass']; ?></br> RAMSAY: <?php echo $user['ramsay']; ?></td>
					<td rowspan="2">ANTIB: <?php echo $user['ant1']; ?> <?php echo $user['dia1']; ?> <?php echo $user['ant2']; ?> <?php echo $user['dia2']; ?> <?php echo $user['ant3']; ?> <?php echo $user['dia3']; ?> <?php echo $user['ant4']; ?> <?php echo $user['dia4']; ?> <?php echo $user['ant5']; ?> <?php echo $user['dia5']; ?></br>LSPS: <?php echo $user['lsps']; ?></br> SEDACION: <?php echo $user['sedacion']; ?>DIETA: <?php echo $user['dieta']; ?> <?php echo $user['ayuno']; ?></td>
					<td rowspan="2"><?php echo $user['con_paciente']; ?></td>
					
					
                    	 <td>
                      <a href="E_Modificar_informe.php?id=<?php echo $user['id']; ?>" rowspan="2" >Modificar</a>
                    </td>
							
                  </tr>
				  <tr>
				  <td> Dias Post Evento: <?php echo $user['dia_post']; ?></br> Dias de Estancia: <?php echo $user['dia_estancia']; ?></td>
				  </tr>
                  <?php
                }
                  ?>
               
                 
                </tbody>
              </table>
			  
            </div>
		
			
         
          </section>
			  
          </section>
        </div>
      </div>
	  
    

    