<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM almacen WHERE id_entrada= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>