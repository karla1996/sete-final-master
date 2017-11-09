<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$tipo=$_POST['tipo'];


	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
							 }else if($tipo==2)
							 	{
								mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$mail','$pass','','','','','','2')");
								echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
								}
								else if($tipo==3)
									{
									mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$mail','','','$pass','','','','3')");
									echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
									}
									else if($tipo==4){
									mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$mail','','','','$pass','','','4')");
									echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
													}
													else if($tipo==5){
													mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$mail','','','','','$pass','','5')");
													echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
																	}
																	else if($tipo==6){
																	mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$mail','','','','','','$pass','6')");
																	echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
																	}
						}else{
							echo 'Las contraseñas son incorrectas';
							}

	
?>