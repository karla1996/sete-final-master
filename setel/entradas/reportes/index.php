<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ALMACEN</title>
<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="row">
                    <div class="col-md-12">
                       
                        <div class="panel panel-info">
                            <div class="panel-heading">
							<?php
include_once('header.php');
?>
                                
                            </div>
                            <div class="panel-body">
                            
      
     
	 </div>
	 </div>
    <section>
    <table border="0" align="center">
    	<tr>
        	
            <td><input type="date" id="bd-desde"/></td>
            <td>Hasta&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" id="bd-hasta"/></td>
        
            <td width="200"><a target="_blank" href="javascript:reportePDF();" class="btn btn-primary btn-lg">Exportar a PDF</a></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros"></div>
   <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra un Producto</b></h4>
            </div>
            <form id="formulario" class="formulario" onsubmit="return agregaRegistro();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-prod" name="id-prod" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro" name="pro"/></td>
                    </tr>
                	<tr>
                    	<td>CLAVE: </td>
                        <td><input type="text" required="required" name="clave" id="clave" maxlength="100"/></td>
                    </tr>
                    <tr>
                    	<td>ENTRADA: </td>
                        <td><select required="required" name="entrada" id="entrada">
                        		<option value="enlatados">CAJA</option>
                                <option value="organicos">PIEZA</option>
                                <option value="nocomestibles">UNIDADES</option>
                                <option value="otros">Otros</option>
                            </select></td>
                    </tr>
                    <tr>
                    	<td>DESCRIPCION: </td>
                        <td><input type="text" required="required" name="descripcion" id="descripcion"/></td>
                    </tr>
                    <tr>
                    	<td>CANTIDAD </td>
                        <td><input type="text"  required="required" name="cantidad" id="cantidad"/></td>
                    </tr>
					<tr>
                    	<td>UNIDADES </td>
                        <td><input type="text"  required="required" name="unidades" id="unidades"/></td>
                    </tr>
                    
                </table>
            </div>
            
            
            </form>
         
       
     
      

                           
                     
                   
</body>
</html>
