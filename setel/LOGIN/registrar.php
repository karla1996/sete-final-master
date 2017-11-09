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
	<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">
		<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" required placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control" required placeholder="Ingresa contraseña" />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>

    <div class="form-group">
    <label style="font-size: 14pt"><b>Tipo de usuario</b></label>
          
            <select class="form-control" id="tipo" name="tipo" required>
              <option>Seleccionar...</option>
              <option value="2">Enfermeras</option>
              <option value="3">Jefe de enfermeras</option>
              <option value="4">Almacen</option>
              <option value="5">Ceyes</option>
              <option value="6">Directivos</option>
            </select>
          </div>
      
    </div>
   
    <input  class="btn btn-primary" type="submit" name="submit" value="Registrarse"/>
    <a href="admin.php" class="btn btn-primary">Regresar</a>

  </fieldset>
</form>
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