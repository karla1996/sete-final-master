<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SETEL</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<!-- barra -->
<div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></i>SETEL</a>
                </div>
                <!-- Menú desplegable -->
				<ul class="des">
					<li><a href="">Salir</a></li>
					<li><a href="">Enfemería</a>
						<ul>
							<li><a href="E_index_inicio.php">Movimiento diario de pacientes</a></li>
							<li><a href="E_index2">Informe de pacientes</a></li>
							<li><a href="E_InfoPacientes">Datos de pacientes</a></li>
						</ul>
					</li>
					
				</ul>

            </div>
        </div>
</div>

<!-- DATOS -->
<br><br>
<h2 style="color:#317ba0";><strong>&nbsp;&nbsp;INFORME</strong></h2>
<hr aling="left">
<form action="informe.php" method="post" >
&nbsp;&nbsp;&nbsp;&nbsp;NO. EXPEDIENTE: <input type="text" size="10"/> <input type="submit" name="btnbuscar" value="BUSCAR">
<hr aling="left">
</form>
</body>
</html>