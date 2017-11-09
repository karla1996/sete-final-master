<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="setel";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}
////////////////// VARIABLES DE CONSULTA////////////////////////////////////

$where="";
$expediente = isset($_POST['xexpediente']) ? $_POST['xexpediente'] : null ;
$tipo_paci=isset($_POST['xtipo']) ? $_POST['xtipo'] : null ;
$limit=isset($_POST['xregistros']) ? $_POST['xregistros'] : null;
////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{

	if (empty($_POST['xtipo']))
	{
		$where="where No_expediente='".$expediente."'";
	}
	else if (empty($_POST['xexpediente']))
	{
		$where="where tipo_paciente='".$tipo_paci."'";
	}

	else
	{
		$where="where  No_expediente='".$expediente."' and tipo_paciente='".$tipo_paci."'";
	}
	
}
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$pacientes="SELECT * FROM datos_del_paciente $where $limit";
$resPacientes=$conexion->query($pacientes);
$resTipo=$conexion->query($pacientes);

if(mysqli_num_rows($resPacientes)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}
?>
<html lang="es">
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
					<li><a href="../LOGIN/index.php">Salir</a></li>
					<li><a href="">Enfemería</a>
						<ul>
							<li><a href="E_index_inicio.php">Movimiento diario de pacientes</a></li>
							<li><a href="E_index2.php">Informe de pacientes</a></li>
							<li><a href="E_InfoPacientes.php">Datos de pacientes</a></li>
							<li><a href="E_Modificar.php">Modificar</a></li>
							<li><a href="E_Borrar.php">Dar de baja paciente</a></li>
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
                
              
         <section>
		<?php
				include("conexion1.php");
				$query="SELECT * FROM datos_del_paciente";
				$resultado=$conexion->query($query);
				$user = $resultado->fetch_assoc() 
				?>
				<form action="E_Borrar.php?No_expediente=<?php echo $user['No_expediente']; ?>" method="post">
						<input type="text" placeholder="Expediente..." name="xexpediente"/>			
				<input type="text" placeholder="Tipo paciente..." name="xtipo"/>
				<button name="buscar" type="submit">Buscar</button>
			</form>	
				<?php	 
		
			$No_expediente=isset($_REQUEST['No_expediente']) ? $_REQUEST['No_expediente']: null;
			include ("conexion1.php");
			$resultado = $conexion->query($query);
			$row=$resultado->fetch_assoc();
	 
		?>
				<form action="borrar.php?No_expediente=<?php echo $row['No_expediente']; ?>" method="post" > </br>
				<button name="borrar" type="submit">Borrar</button>
				</form>
			 <table>
                <thead>
                  <tr>
					
					
					
					<th width="150">Num. expediente</th>
					<th width="150">Nombre</th>
					<th width="150">Tipo de paciente</th>
					<th width="150">Cama</th>
					<th width="150">Sexo</th>
					<th width="150">Diagnostico</th>
					<th width="150">Lugar de referencia</th>
					<th width="150">Fecha ingre</th>				
					<th width="150">Dia del evento</th>
					<th width="150">Fecha nacimiento</th>
					<th width="150">Num. SPP</th>
					
                  </tr>
                </thead>
				<tbody>

				<?php

				while ($registroPacientes = $resPacientes->fetch_array(MYSQLI_BOTH))
				{

					echo'<tr>
						 <td>'.$registroPacientes['No_expediente'].'</td>
						 <td>'.$registroPacientes['Nombre'].'</td>
						 <td>'.$registroPacientes['tipo_paciente'].'</td>
						 <td>'.$registroPacientes['nocama'].'</td>
						 <td>'.$registroPacientes['Sexo'].'</td>
						 <td>'.$registroPacientes['Diagnostico'].'</td>
						 <td>'.$registroPacientes['l_referencia'].'</td>
						 <td>'.$registroPacientes['fecha_ingreso'].'</td>
						 <td>'.$registroPacientes['dia_evento'].'</td>
						 <td>'.$registroPacientes['F_nacimiento'].'</td>
						 <td>'.$registroPacientes['No_SPP'].'</td>
						 </tr>';
				}
				?>
			</table>

			<?
				echo $mensaje;
			?>
		</section>
                    	
					
               
                 
                </tbody>
              </table>
			  
            </div>
			<div class="row">
               
              </div>
			
         
          </section>
			  
          </section>
        </div>
      </div>
	  
    

    