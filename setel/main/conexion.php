<?php
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'setel');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

function conection()
{$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysqli_select_db($con,DB_DATABASE);
return $con;
}


?>