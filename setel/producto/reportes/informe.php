
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
SETEL
</title>

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

	<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<style> table{
    font-family: "Trebuchet MS", sans-serif;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.4em;
    font-style: normal;
    border-collapse:separate;
	
}
table, th{
        border: 1px solid RGB(128, 128, 128);
		            border-top: 10px solid DODGERBLUE;
            padding: 1px;

      }
	  table, td{
        border: 1px solid RGB(128, 128, 128);
		            border-top: 1px solid GRAY;
            padding: 5px;

      }

.cuadro{
	
	 border:5px solid #1E90FF;
    border-bottom:3px solid #1E90FF;
}

   </style>
</head>
<body>
  
		<div class="col-md-14">
                       
                        <div class="panel-primary class">
                            <div class="panel-heading">
							<?php
include_once('header.php');

 

?>    </div>
    </div>
                            </div>
                      <div class="panel-body">      
      
     

<div style="margin-top: -19px; margin-bottom: 21px;">
<?php 
			include('connect.php');
				$result = $db->prepare("SELECT * FROM almacen where existencia > 0  ORDER BY id_entrada DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			
			
</div>
 <div class="col-sm-16 col-lg-3">
          <div class="panel panel-primary" id="panels" data-effect="helix">
            
            <div class="panel-body">

            </div>
            <div class="panel-footer"><div style="text-align:center;">
<input  type="text" name="filter" style="height:35px; margin-top: -px;" value="" id="filter" placeholder="Buscar Productos ..." autocomplete="off" />

			Numero Total de Productos: <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount;?></font>
			</div>
           </div>
		   </div>
 <table>
 <thead>
		<tr>
		
			<th width="200"> CLAVE </th>
			<th> NO.FACURA </th>
			<th> No.PEDIDO </th>
			<th> FECHA_ING </th>
			<th> MOVIMIENTO </th>
			<th>PROVEEDOR </th>
			<th> ENTRADA </th>
			<th> DESCRIPCION </th>
			<th> PREDENTACION </th>
			<th> CANTIDAD</th>
			<th> UNIDADES </th>
			<th> PRECIO </th>
			<th> IMPORTE</th>
			<th> LOTE </th>
			<th> FECHA_CAD </th>
			<th> EXISTENCIA </th>
			<th width="120">ACCION </th>
			
		</tr>
	</thead>
	<tbody>
		
			<?php
				include('connect.php');
				$result = $db->prepare("SELECT * FROM almacen where existencia > 0  ORDER BY id_entrada DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['clave']; ?></td>
			<td><?php echo $row['no_factura']; ?></td>
			<td><?php echo $row['no_pedido']; ?></td>
			<td><?php echo $row['fecha_ing']; ?></td>
			<td><?php echo $row['movimiento']; ?></td>
			<td><?php echo $row['proveedor']; ?></td>
			<td><?php echo $row['entrada']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<td><?php echo $row['presentacion']; ?></td>
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['unidades']; ?></td>
			<td><?php echo $row['precio_unitario']; ?></td>
			<td><?php echo $row['importe']; ?></td>
			<td><?php echo $row['lote']; ?></td>
			<td><?php echo $row['fecha_cad']; ?></td>
			<td><?php echo $row['existencia']; ?></td>
			<td><a href="#" id="<?php echo $row['id_entrada']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger "><i></i> Delete</button></a></td>
			</tr>
			<?php
				}
			?>
		
	</tbody>
</table>

<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Deseas eliminar este producto? "))
		  {

 $.ajax({
   type: "GET",
   url: "deletesupplier.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>


</html>