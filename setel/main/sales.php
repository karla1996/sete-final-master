<!DOCTYPE html>
<html>
<head>
	<!-- js -->			
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
<title>
SETEL
</title>

       
		<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
		font-size: 14px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	  .chzn-select
	  {
		  
	  }
    </style>

 <script language="javascript" type="text/javascript">

</SCRIPT>	

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
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
	





	</head>
	

			
			</form>
		
			</li>
				
				</ul>    
			
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
		<div class="contentheader">
			<i></i> Punto de Salida
			</div>
			<ul class="breadcrumb">
			<a href="index.php"><li>Salidas</li></a> /
			<li class="active">Almacen</li>
			</ul>
<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: none;"><i class="icon icon-circle-arrow-left icon-large"></i> Volver</button></a>
</div>
													
<form action="incoming.php" method="post" >
											
<input type="hidden" name="pt" value="<?php echo $_GET['id']; ?>" />
<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
<select name="product" style="width:650px;" class="chzn-select" >
<option style="height:35px; font-size:15px;">prueba</option>
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM almacen WHERE existencia >0");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id_entrada'];?>"><?php echo $row['clave']; ?>| <?php echo $row['descripcion']; ?> | <?php echo $row['existencia']; ?> | Expira: <?php echo $row['fecha_cad']; ?></option>
	<?php
				}
			?>
</select>
<input type="number" name="cantidad" value="1" min="1" placeholder="Cantidad" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" / required>

<input type="hidden" name="discount" value="" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" />
<input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>" />
<Button type="submit" class="btn btn-info" style="width: 123px; height:35px; margin-top:-5px;" /><i class="icon-plus-sign icon-large"></i> Agregar</button>
</form>
<table class="table table-bordered" id="resultTable" data-responsive="table">
	<thead>
		<tr>
			<th> CLAVE DEL PRODUCTO </th>
			<!--<th> NOMBRE </th>-->
			<th> Descripcion </th>
			<!--<th> Precio </th>-->
			<th> Cantidad </th>
			<th> Fecha_salida </th>
			<!--<th> Monto </th>
			<th> Ganancia </th>-->
			<th> Accion </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				$id=$_GET['invoice'];
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
				$result->bindParam(':userid', $id);
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
			?>
			<tr class="record">

			<td><?php echo $row['codigo_producto']; ?></td>
			<!--<td><?php echo $row['nombre']; ?></td>-->
			<td><?php echo $row['descripcion']; ?></td>
			<!--<td>
			<?php
			$ppp=$row['price'];
			echo formatMoney($ppp, true);
			?>
			</td>-->
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td width="70"><a href="delete.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_GET['id']; ?>&cantidad=<?php echo $row['cantidad'];?>&code=<?php echo $row['product'];?>"><button class="btn btn-mini btn-warning"><i class="icon icon-remove"></i> Cancelar </button></a></td>
			</tr>
			<?php
				}
			?>
			<tr>
			<th> </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			
			<th>  </th>
		</tr>
			<tr>
				
				<!--<td colspan="1"><strong style="font-size: 12px; color: #222222;"> -->
				<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				$sdsd=$_GET['invoice'];
				$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				//$fgfg=$rowas['sum(amount)'];
				//echo formatMoney($fgfg, true);
				}
				?>
				</strong></td>
				<!--<td colspan="1"><strong style="font-size: 12px; color: #222222;"> -->
			<?php 
				$resulta = $db->prepare("SELECT sum(profit) FROM sales_order WHERE invoice= :b");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				//$asd=$qwe['sum(profit)'];
				//echo formatMoney($asd, true);
				}
				?>
		
				</td>
				<th></th>
			</tr>
		
	</tbody>
</table><br>
<a rel="facebox" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>"><button class="btn btn-success "><i class="icon icon-save"></i> Guardar</button></a>
<div class="clearfix"></div>
</div>
</div>
</div>
</body>
<?php include('footer.php');?>
</html>