
<form action="index.php" method="post">

<select name="proveedor"  style="width:265px; height:30px; margin-left:-5px;" >
<option></option>
	<?php
	include('connect.php');
	$result = $db->prepare("SELECT * FROM proveedores");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['nombre']; ?></option>

	<?php
	}
	?>

</select>
<a rel="facebox" href="addsupplier.php"><Button type="submit" class="btn btn-info" style="float:right; width:200px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Agregar Proveedor</button></a><br><br>

		
                        
</div>
</div>
</form>


