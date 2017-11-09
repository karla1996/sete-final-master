<!DOCTYPE HTML>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
   require_once "scripts.php";
   ?>
<style>

#block1 h1{
    font-family:Georgia,"Times New Roman",Times,serif;
    font-weight:normal;
    text-shadow:0 0 1px #000;
    color:#444444;
    font-size:1em;
    text-transform:capitalize;
    line-height:1.2em;
    margin:0 0 10px;
}

#block1 a{
color: #000000  ;
text-decoration:none;
}
#block1 a:hover{
text-decoration:underline;
background-color:#C1CFE7  ;

}  
</style>
<?php
include('connect_db.php');
?>
</head>
<body>

<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="header">
	<div id="block1">

<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><h1>SETEL</h1></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
   
 
   
 
    <ul class="nav navbar-nav navbar-right">
    <li><a href="">Bienvenido Administrador</a></li>
      <li><a href="#">Inicio</a></li>
	  <li><a href="registrar.php">Registrar</a></li>
<li><a href="desconectar.php"> Cerrar Sesi&oacute;n </a></li> 
      
    </ul>
  </div>
</nav>
	</div>
	</div>
	</div>
</body>
</html>