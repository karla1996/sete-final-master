<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto academias</title>

</head>
<body background="images/fondotot.jpg" style="background-attachment: fixed" >
	<br><br>			
	<br>	
		<center><div class="Ingreso">
		

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		

<!-- formulario registro -->

   <div class="row">
        <div class="col-sm-12 col-lg-3">
          <div class="panel panel-primary" id="panels" data-effect="helix">
            <div class="panel-heading"><font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>SETEL</center></font>
            </div>
            <div class="panel-body">
              <form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		
		<tr><std></td>
				<br>
				
			<td><center><input class="btn btn-primary btn-block" type="submit" value="Aceptar"></center></td>
			 <!-- <td width=20 align=right><a href="registrar.php" class="btn btn-primary">Registro</a></td>-->

			</tr></tr></table>
		</form>
            </div>
            <div class="panel-footer">
            </div>
          </div>
        </div>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>