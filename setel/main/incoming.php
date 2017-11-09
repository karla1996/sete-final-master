<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['cantidad'];
$w = $_POST['pt'];
$date = $_POST['date'];
//$discount = $_POST['discount'];
$result = $db->prepare("SELECT * FROM almacen WHERE id_entrada= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
//$asasa=$row['price'];
$code=$row['clave'];
//$gen=$row['nombre'];
$name=$row['descripcion'];
//$p=$row['profit'];
}

//edit qty

$sql = "UPDATE almacen 
        SET existencia=existencia-?
		WHERE id_entrada=?";
$q = $db->prepare($sql);
$q->execute(array($c,$b));
//$fffffff=$asasa-$discount;
//$d=$fffffff*$c;
//$profit=$p*$c;
// query
$sql = "INSERT INTO sales_order (invoice,product,cantidad,descripcion,codigo_producto,date) VALUES (:a,:b,:c,:e,:i,:k)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':e'=>$name,':i'=>$code,':k'=>$date));
header("location: sales.php?id=$w&invoice=$a");

?>