<?php
require('impresion_form/fpdf/fpdf.php');
require("conexion.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',14); 
$pdf ->Image('Imagenes/logo.png',10,8,10,13,'png');
$pdf ->Cell(18,10,'',0);
$pdf ->Cell(150,10,'DISEM - Diseños Morales',0);
$pdf ->SetFont('Arial','',9);
$pdf ->Cell(50,10,'Fecha:'.date('d-m-Y').'',0);
$pdf ->Ln(15);
$pdf ->SetFont('Arial','B',11);
$pdf ->Cell(70,8,'',0);
$pdf ->Cell(100,8,'FACTURA - DISEM',0);
$pdf ->Ln(23);
$pdf ->SetFont('Arial','B',8);
$pdf ->Cell(15,8,'Factura N°:',0);
$pdf ->Cell(50,10,'Fecha de Expedicion:'.date('d-m-Y').'',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Fecha de vencimiento:',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Vendedor Encargado:',0);
$pdf ->Cell(15,8,'Forma de pago:',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Comprador:',0);
$pdf ->Cell(15,8,'NIT/C.C:',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Direccion:',0);
$pdf ->Cell(15,8,'Telefono:',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Codigo:',0);
$pdf ->Cell(15,8,'Producto:',0);
$pdf ->Cell(15,8,'Cantidad:',0);
$pdf ->Cell(15,8,'Precio x Unidad:',0);
$pdf ->Cell(15,8,'Precio Netario:',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'IVA: 16%',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Descuento Comercial (%):',0);
$pdf ->Ln(10);
$pdf ->Cell(15,8,'Total:',0);
$pdf ->SetFont('Arial','B',8);
//CONSULTA
$facturas = mysql_query("SELECT * FROM facturas");
$item = 0;
while ( <= 10) {
	# code...
}
?> 