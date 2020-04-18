<?php
 
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 50);
//inserto la cabecera poniendo una imagen dentro de una celda
$pdf->Cell(100,100,$pdf->Image('imagenes/logo.png',20,1,30),0,0,'C');
$pdf->Cell(10,5,"DISEM",20,1);
$pdf->Ln(30);
$pdf->SetFont('Arial','B',30); 

$pdf->SetFont('Arial','B',16); 
$pdf->Cell(100,12,"Fecha: ". date('d/m/Y'));
$pdf->Ln(20);
$pdf->Cell(50,12,"id");
$pdf->Cell(50,12,($_POST['<?php echo $row["id"];?>']));

$pdf->Ln(7);

$pdf->Output("factura.pdf",'F');

echo "<script language='javascript'>window.open('factura.pdf','_self','');</script>";//paral archivo pdf generado

exit;
?>