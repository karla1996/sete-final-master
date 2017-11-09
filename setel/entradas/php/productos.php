<?php

if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
	$hasta = $_GET['hasta'];

	$verDesde = date('d/m/Y', strtotime($desde));
	$verHasta = date('d/m/Y', strtotime($hasta));
}else{
	$desde = '1111-01-01';
	$hasta = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('../fpdf/fpdf.php');
require('conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Almacen', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'REPORTE DE ENTRADAS', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(100, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Item', 0);
$pdf->Cell(25, 8, 'Clave', 0);
$pdf->Cell(75, 8, 'Descripcion', 0);
$pdf->Cell(30, 8, 'Presentacion', 0);
$pdf->Cell(20, 8, 'Entradas', 0);
$pdf->Cell(20, 8, 'Existencia', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("SELECT * FROM almacen WHERE fecha_ing BETWEEN '$desde' AND '$hasta' ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysql_fetch_array($productos)){
	$item = $item+1;
	
	$pdf->Cell(15, 8, $item, 0);
	$pdf->Cell(25, 8,$productos2['clave'], 0);
	$pdf->Cell(75, 8,$productos2['descripcion'], 0);
	$pdf->Cell(30, 8,$productos2['presentacion'], 0);
	$pdf->Cell(20, 8,$productos2['cantidad'], 0);
	$pdf->Cell(20, 8, $productos2['existencia'], 0);
	
	$pdf->Ln(8);
}


$pdf->Output('reporte.pdf','D');
?>