<?php 
 function fetch_data(){  
$output = '';  
	  $connect = mysqli_connect("localhost", "root", "", "setel");
      $sql = "SELECT * FROM datos_del_paciente WHERE fecha=(SELECT MAX(fecha) FROM datos_del_paciente) and turno='tnoche' AND tipo_paciente='adulto'";
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result)){       
      $output .= '<tr>  
                         <td rowspan="2">'.$row["fecha_ingreso"].'</td>  
                          <td rowspan="2">'.$row["Edad"].'</td>  
                          <td rowspan="2">'.$row["nocama"].'<br/>'.$row["Nombre"].' <br/>'.$row["No_SPP"].'</td>  
                          <td rowspan="2">'.$row["l_referencia"].'</td>  
						  <td >Diagnostico: '.$row["Diagnostico"].'</td> 
						  <td rowspan="2"> TA: '.$row["ta1"].' '.$row["ta2"].' FC: '.$row["fc"].' FR: '.$row["fr"].'<br/>  TEMP: '.$row["tem"].'  PVC: '.$row["pvc"].' <br/> TISS: '.$row["tiss"].' UI: '.$row["ui"].' </td> 
						  <td rowspan="2">REQ. Energetico: '.$row["pia"].' <br/> GLASGOW: '.$row["glasgow"].' <br/> RASS: '.$row["rass"].' <br/> RAMSAY: '.$row["ramsay"].'</td> 
						  <td rowspan="2">ANTIB: '.$row["ant1"].' '.$row["dia1"].' '.$row["ant2"].' '.$row["dia2"].' '.$row["ant3"].' '.$row["dia3"].' '.$row["ant4"].' '.$row["dia4"].' '.$row["ant5"].' '.$row["dia5"].'
						  <br/> LSPS: '.$row["lsps"].' <br/> SEDACION '.$row["sedacion"].' <br/> Dieta: '.$row["dieta"].' '.$row["ayuno"].'</td>  
                          <td rowspan="2">'.$row["con_paciente"].'</td>  
                     </tr>   
					 <tr>
					 <td>Dia post evento:'.$row["dia_post"].' <br/>Dias de estancia '.$row["dia_estancia"].'</td>
					 </tr>
                          ';    
      }  
	  
      return $output;  
 } 
 function fetch_data1()  
 {  
      $output1 = '';  
	  $connect1 = mysqli_connect("localhost", "root", "", "setel");
      $sql1 = "SELECT * FROM datos_del_paciente WHERE fecha=(SELECT MAX(fecha) FROM datos_del_paciente) and turno='tnoche' AND tipo_paciente='pediatria'";
      $result = mysqli_query($connect1, $sql1);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output1 .= '<tr>  
					
                         <td rowspan="2">'.$row["fecha_ingreso"].'</td>  
                          <td rowspan="2">'.$row["Edad"].'</td>  
                          <td rowspan="2">'.$row["nocama"].'<br/>'.$row["Nombre"].' <br/>'.$row["No_SPP"].'</td>  
                          <td rowspan="2">'.$row["l_referencia"].'</td>  
						  <td >Diagnostico: '.$row["Diagnostico"].'</td> 
						  <td rowspan="2"> TA: '.$row["ta1"].' '.$row["ta2"].' FC: '.$row["fc"].' FR: '.$row["fr"].'<br/>  TEMP: '.$row["tem"].'  PVC: '.$row["pvc"].' <br/> TISS: '.$row["tiss"].' UI: '.$row["ui"].' </td> 
						  <td rowspan="2">REQ. Energetico: '.$row["pia"].' <br/> GLASGOW: '.$row["glasgow"].' <br/> RASS: '.$row["rass"].' <br/> RAMSAY: '.$row["ramsay"].'</td> 
						  <td rowspan="2">ANTIB: '.$row["ant1"].' '.$row["dia1"].' '.$row["ant2"].' '.$row["dia2"].' '.$row["ant3"].' '.$row["dia3"].' '.$row["ant4"].' '.$row["dia4"].' '.$row["ant5"].' '.$row["dia5"].'
						  <br/> LSPS: '.$row["lsps"].' <br/> SEDACION '.$row["sedacion"].' <br/> Dieta: '.$row["dieta"].' '.$row["ayuno"].'</td>  
                          <td rowspan="2">'.$row["con_paciente"].'</td>  
                     </tr>   
					 <tr>
					 <td>Dia post evento:'.$row["dia_post"].' <br/>Dias de estancia '.$row["dia_estancia"].'</td>
					 </tr>
                          ';    
      }  
	  
      return $output1;  
 } 
 function fetch_data2()  
 {  
      $output1 = '';  
	  $connect1 = mysqli_connect("localhost", "root", "", "setel");
      $sql1 = "SELECT * FROM in_paciente WHERE id=(select MAX(id) FROM in_paciente)";
      $result = mysqli_query($connect1, $sql1);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output1 .= '
	  <h4 style="font-size:7px"> Altas:'.$row["altas"].' </h4>
	  <h4 style="font-size:7px"> Referencia: '.$row["referencia"].' </h4>
	  <h4 style="font-size:7px"> Defuncion: '.$row["defucion"].' </h4>
	  <h4 style="font-size:7px"> Contrarreferencia: '.$row["contra"].' </h4>
	  <h4 style="font-size:7px"> Cirugias programadas: '.$row["cirug_progra"].'  Realzadas: '.$row["cirug_reali"].' Suspendidas: '.$row["cirug_susp"].' </h4>
	  <h4 style="font-size:7px"> Camas disponibles UCI: '.$row["camas_usi"].'  U. Quemados: '.$row["camas_quem"].' </h4>

            ';    
      }  
	  
      return $output1;  
 }    
 if(isset($_POST["create_pdf"]))  
 {  


      require_once('tcpdf/tcpdf.php');  
      
	  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("SETEL");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(true);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '
	 
      <h3 align="center" style="font-size:7px">Secretaria de salud   Informe de Pacientes al Director     Centro estatal de cuidados criticos Fecha:</h3><br /><br />  
      <table align ="center" border="1" cellspacing="0" cellpadding="0" style="font-size:7px">  
          <tr><th> Unidad de Cuidados intensivos / Quemados Adultos </th> </tr> 
		  <tr>  
					
					<th width="9%">Fecha Ingreso</th>
					<th width="6%">Edad</th>
					<th width="10%">Cama y Nombre</th>
					<th width="10%">Lugar de referencia</th>
					<th width="13%">Diagnostico</th>
					<th colspan="2" width="28%">Cuidados especiales</th>
					<th width="14%">Tratamiento</th>
					<th width="10%">Condicion del Paciente</th>
					
			
           </tr> 
      ';  
      $content .= fetch_data(); 
	  $content.='
	  <tr><th colspan="9"> Unidad de Cuidados intensivos / Quemados Pediatricos </th> </tr> 
		  <tr>  
				
                
					<th width="9%">Fecha Ingreso</th>
					<th width="6%">Edad</th>
					<th width="10%">Cama y Nombre</th>
					<th width="10%">Lugar de referencia</th>
					<th width="13%">Diagnostico</th>
					<th colspan="2" width="28%">Cuidados especiales</th>
					<th width="14%">Tratamiento</th>
					<th width="10%">Condicion del Paciente</th>
           </tr> 
	  ';
	  $content .= fetch_data1(); 
      $content .= '</table>'; 
	  $content .= fetch_data2(); 
	  $content.='
	  <h3 align="center" style="font-size:7px"> JEFATURA DE ENFERMERIA</h3>';	  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
	  
 }  
 ?>  
 <!DOCTYPE html>  
<html class="no-js" lang="en">
  <head>
   <meta charset="utf-9" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Setel</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
	<style> 
table, th{ 
        border: 1px solid rgb(10,150,10);
		            border-top: 10px solid blue;
					color: black;
            padding: 10px;

      }
	  td{
		  border: 1px solid rgb(10,150,10);
	  }
h3{
	  color: rgb(10, 200, 10);
}
        


   </style>
  </head>
  <body>
     

    <div class="row">
 
      <div class="large-10 columns">
        <h3>PACIENTES</h3>
         
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
			  
                <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Imprimir" />  
                     </form> 
              
              <table style="font-size:14px">
                <thead>
                   <tr>
					
					<th width="100">Fecha Ingreso</th>
					<th width="60">Edad</th>
					<th width="80">Cama y Nombre</th>
					<th width="100">Lugar de referencia</th>
					<th width="100">Diagnostico</th>
					<th colspan="2" width="200">Cuidados especiales</th>
					<th width="100">Tratamiento</th>
					<th width="100">Condicion del Paciente</th>
					
					
                  </tr>
				  </thead> 
				  <?php  
                     echo fetch_data();  
                     ?>  
                     
			 <tr>
					<th width="100">Fecha Ingreso</th>
					<th width="60">Edad</th>
					<th width="80">Cama y Nombre</th>
					<th width="100">Lugar de referencia</th>
					<th width="100">Diagnostico</th>
					<th colspan="2" width="200">Cuidados especiales</th>
					<th width="100">Tratamiento</th>
					<th width="100">Condicion del Paciente</th>
            </tr>
				  <?php  
                     echo fetch_data1();  
                     ?>  
                     </table>  
                     <br />  
                     
                </div>  
           </div>  
      </body>  
 </html> 