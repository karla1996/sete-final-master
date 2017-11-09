<?php
session_start();
include('connect.php');
$a = $_POST['name'];
$b = $_POST['tel'];

// query
$sql = "INSERT INTO proveedores (nombre,telefono) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b));
header("location: index.php");
?>