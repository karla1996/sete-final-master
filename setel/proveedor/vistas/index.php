<html>

<head>
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
<style>
 .button3 {#e7e7e7; color: black;
  
    border: none;
    color: white;
    padding: 15px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;}
 </style>
<body>

    <section>
    <table border="0" align="center">
	<div class="col-md-12">
                    
		<a style="float: right;" href="../../LOGIN/index.php" class="button3">CERRAR SESI&OacuteN  <font color="red"><i class="icon-off icon-large" style="float: right;  " ></i></font></a>
   <a href="/setel/main/index.php" style="float: right; " class="button3">ENTRADAS</a>


                        <div class="panel panel-primary">
						
                            <div class="panel-heading">
							<h4>PROVEEDORES
</h4>
                               <tr>
							    <div class="content" data-slug="panel1">
              <form method="post">
			    <div class="row">
			<div class="col-md-12">
        	<td width="335"><input type="text" placeholder="Busca un producto por: Nombre" id="bs-prod"/></td>
        </tr>
                            </div>
                      
                    </div>
    	   </div>
		      </div>
    </table>
    </section>

    <div class="registros" id="agrega-registros"></div>

		
    <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b> Edita un Producto</b></h4>
            </div>
            <form id="formulario" class="formulario" onsubmit="return agregaRegistro();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-prod" name="id-prod" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                    
                	<tr>
                    	<td>Nombre: </td>
                        <td><input type="text" required="required" name="nombre" id="nombre" maxlength="100"/></td>
                    </tr>
                    
                   <tr>
                    	<td>Telefono: </td>
                        <td><input type="text" required="required" name="tipo" id="tipo"/></td>
                    </tr>
					
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="modal-footer">
            	
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
            </form>
          </div>
		  
        </div>
      </div>
	   </div>
	    </div>


</body>
</html>
