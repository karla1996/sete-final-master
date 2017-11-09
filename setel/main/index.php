<!DOCTYPE html>
<?php
include_once('consultas_entradas.php');

 if( $_POST )
{


  $id_entrada=isset($_POST['id_entrada'])? $_POST['id_entrada'] :'';
  $clave=isset($_POST['clave'])? $_POST['clave'] :'';
  $no_factura=isset($_POST['no_factura'])? $_POST['no_factura'] :'';
  $no_pedido=isset($_POST['no_pedido'])? $_POST['no_pedido'] :'';
  $fecha_ing=isset($_POST['fecha_ing'])? $_POST['fecha_ing'] :'';
  $movimiento=isset($_POST['movimiento'])? $_POST['movimiento'] :'';
  $proveedor=isset($_POST['proveedor'])? $_POST['proveedor'] :'';
  $entrada=isset($_POST['entrada'])? $_POST['entrada'] :'';
  $descripcion=isset($_POST['descripcion'])? $_POST['descripcion'] :'';
  $presentacion=isset($_POST['presentacion'])? $_POST['presentacion'] :'';
  $cantidad=isset($_POST['cantidad'])? $_POST['cantidad'] :'';
  $unidades=isset($_POST['unidades'])? $_POST['unidades'] :'';
  $precio_unitario=isset($_POST['precio_unitario'])? $_POST['precio_unitario'] :'';
  $importe=isset($_POST['importe'])? $_POST['importe'] :'';
  $lote=isset($_POST['lote'])? $_POST['lote'] :'';
  $fecha_cad=isset($_POST['fecha_cad'])? $_POST['fecha_cad'] :'';
 
  add($id_entrada, $clave, $no_factura, $no_pedido, $fecha_ing, $movimiento, $proveedor, $entrada, $descripcion, $presentacion, $cantidad, $unidades, $precio_unitario, $importe,$lote,$fecha_cad,$cantidad);
  
die();

}

?>
<html>
<head>
<title>
SETEL
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
	  /*----------- CAJA ----------- */


.caja {

font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;

color: #ffffff;

font-size: 18px;

font-weight: 400;

text-align: center;

background: #889ccf;

margin: 0 0 25px;

overflow: hidden;

padding: 20px;

border-radius: 35px 0px 35px 0px;

-moz-border-radius: 35px 0px 35px 0px;

-webkit-border-radius: 35px 0px 35px 0px;

border: 2px solid #5878ca;


}
    </style>
	
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>

<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	
</head>
<body>
<?php include('navfixed.php');?>

	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
	<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
                     <ul class="nav nav-list">
           
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Salidas</a>  </li>             
			<li><a href="index.php"><i class="icon-list-alt icon-2x"></i> Entradas</a>                                     </li>
			                                   </li>
			<li><a href="../proveedor/vistas/index.php"><i class="icon-group icon-2x"></i> Proveedores</a>                                    </li>
			<li><a href="#"><i class="icon-bar-chart icon-2x"></i> Informes</a>           
 <ul class="nav nav-second-level">
                            <li>
                                <a href="../entradas/reportes/index.php">Entradas</a>
                            </li>
                            
							<li>
                                <a href="../caducidad/vistas/index_caducidad.php">Caducidad</a>
                            </li>
                            <li>
                                <a href="../general/reportes/index_general.php">Inventario General</a>
                            </li>
							
							<li>
                                <a href="../producto/reportes/informe.php">Informe/producto</a>
                            </li>
							<li>
                                <a href="salesreport.php?d1=0&d2=0">Reporte de salidas</a>
                            </li>
							</hr>
							</hr>
							</hr>
							

							</li>
                        </u>			</li>
			<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			
			  </div>
			</li>
				</ul>                               
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">   
        <!-- /. NAV SIDE  -->
      
      
            <div class="content" data-slug="panel1">
              <form method="post">
			    <div class="row">
			<div class="col-md-12">
         <div class="caja">CONTROL DE ALMAC&EacuteN </div>
               
              <div>

     <div class="panel panel-primary">
			  <div class="panel-footer">
			  
			  
					<label><a>Clave</a>
                      <input type="text" name="clave" placeholder="" />
                    </label>
					<label><a>No.Factura</a>
                      <input type="text" name="no_factura" placeholder="" />
                    </label>
					<label><a>No.Pedido</a>
                      <input type="text" name="no_pedido" placeholder="" />
                    </label>
					<label><a>Fecha/Ingreso</a>
                      <input type="date" name="fecha_ing" placeholder="" />
                    </label>
					
			</div>
			</div>
					<div class="panel panel-primary">
					<div class="panel-footer">
					<label><a>Movimiento</a>
					<select name="movimiento" placeholder="" />
					<option type="text" name="movimiento">Ajuste</option>
					<option type="text" name="movimiento">Apoyo</option>
					<option type="text" name="movimiento">Consumo</option>
					<option type="text" name="movimiento">Devoluciones</option>
					<option type="text" name="movimiento">Donaci&oacuten</option>
					
					</select>
<label><a>Proveedor </a>
                     
                    </label>
			
<?php
include_once('addproduct.php');
?>			

</div>
					<div class="panel panel-primary">
						<div class="panel-footer">
					<label><a>Entrada/Por</a>
                      <select name="entrada" placeholder="" />
					<option type="entrada" name="movimiento">Caja</option>
					<option type="entrada" name="movimiento">Pieza</option>
				
					</select>
                    </label>
					<label><a>Descripcion</a>
                      <input type="text" name="descripcion" placeholder="" />
                    </label>
					</label>
					<label><a>Presentacion</a>
                      <input type="text" name="presentacion" placeholder="" />
                    </label>
					<label><a>Cantidad</a>
                      <input type="text" name="cantidad"  placeholder="" />
					
                    </label>
					<label><a>Unidades</a>
                      <input type="text" name="unidades" placeholder="" />
                    </label>
				    <label><a>Precio/Unitario</a>
                      <input type="text" name="precio_unitario" placeholder="" />
                   </label>
					<label><a>Importe</a>
                      <input type="text" name="importe" placeholder="" />
                   </label>
				  <label><a>Lote</a>
                      <input type="text" name="lote" placeholder="" />
                   </label>
				   <label><a>Fecha/Caducidad</a>
                      <input type="date" name="fecha_cad" placeholder="" />
                    </label>
					 
					 </div></div>
					 </div>
			
   
             
               
                    
<!--                      <input type="submit" name="AGREGAR" class="button success" value="AGREGAR" alor="15"/>-->
                         <input type="submit" class="btn btn-warning" value="AGREGAR" />
   

 <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	


<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
