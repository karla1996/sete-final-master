<?php
//header("Location: http://localhost/SETEL/E/E_index.php"); 
$link = mysqli_connect("localhost", "root", "", "setel");

//check connection
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$n_expediente=$_POST['nu_expediente'];
$query="SELECT * from datos_del_paciente where No_expediente='$n_expediente'";
echo $query;
mysqli_query($link, $query);

//close connection
mysqli_query($link, $query);

//close connection
mysqli_close($link);
?>