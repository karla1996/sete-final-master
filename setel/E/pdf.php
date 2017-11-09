
<?php
    //-----------------------------------------------------------------------------------
    //    Ejemplo básico de utilización de fPDF
    //-----------------------------------------------------------------------------------
    require_once('fpdf/fpdf.php');
	require_once('informe.php');

	$html=ob_get_clean();
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
		
    require_once 'informe.php';
    $pdf->Output();
	
	
 ?>




<!--<?php
/*if(isset($_POST["generar"])){
    //Incluimos la librería
    require_once 'htmll2pdf/scr/Html2Pdf.php';
     
    //Recogemos el contenido de la vista
    ob_start(); 
    require_once 'informe.php';
    $html=ob_get_clean(); 
 
    //Pasamos esa vista a PDF
     
    //Le indicamos el tipo de hoja y la codificación de caracteres
    $mipdf=new HTML2PDF('P','A4','es','true','UTF-8');
 
    //Escribimos el contenido en el PDF
    $mipdf->writeHTML($html);
 
    //Generamos el PDF
    $mipdf->Output('PdfGeneradoPHP.pdf');
 
}*/
?>
<form action="" method="POST">
    <input type="submit" value="Generar PDF" name="generar"/>
</form>-->