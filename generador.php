<?php
 
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 50);
//inserto la cabecera poniendo una imagen dentro de una celda
$pdf->Cell(100,100,$pdf->Image('imagenes/logo.png',20,1,30),0,0,'C');
$pdf->Cell(10,5,"DISEM",20,1);
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(500,5,"900555641-8",100,100,100,0);
$pdf->Ln(30);
$pdf->SetFont('Arial','B',30); 

$pdf->SetFont('Arial','B',16); 
$pdf->Cell(100,12,"Fecha: ". date('d/m/Y'));
$pdf->Ln(7);
$pdf->Cell(70,12,"Factura Numero: ".$_POST['factura']);
$pdf->Cell(70,12,"Vendedor Encargado: ".$_POST['vendedor']);
$pdf->Ln(7);
$pdf->Cell(100,12);
$pdf->Cell(50,12,"Cedula: ". $_POST['cedulaven']);
$pdf->Ln(7);
$pdf->Cell(100,12,("Comprador: ".$_POST['comprador']));
$pdf->Cell(50,12,"NIT/C.C: ".$_POST['cedula']);
$pdf->Ln(7);
$pdf->Cell(100,12,("Direccion: ".$_POST['direccion']));
$pdf->Cell(50,12,"Telefono: ".$_POST['telefono']);
$pdf->SetFont('Arial','B',12);
$pdf->Ln(15);
$pdf->Cell(30,12,("Codigo: ".$_POST['codigo']));
$pdf->Cell(30,12,("Codigo: ".$_POST['codigo1']));
$pdf->Cell(30,12,("Codigo: ".$_POST['codigo2']));
$pdf->Cell(30,12,("Codigo: ".$_POST['codigo3']));
$pdf->Cell(30,12,("Codigo: ".$_POST['codigo4']));
$pdf->Ln(10);
$pdf->Cell(50,12,"Producto: ".$_POST['producto']);
$pdf->Cell(50,12,("Producto: ".$_POST['producto1']));
$pdf->Cell(50,12,("Producto: ".$_POST['producto2']));
$pdf->Cell(50,12,("Producto: ".$_POST['producto3']));
$pdf->Cell(50,12,("Producto: ".$_POST['producto4']));
$pdf->Ln(10);
$pdf->Cell(30,12,("Cantidad: ".$_POST['cantidad']));
$pdf->Cell(30,12,("Cantidad: ".$_POST['cantidad1']));
$pdf->Cell(30,12,("Cantidad: ".$_POST['cantidad2']));
$pdf->Cell(30,12,("Cantidad: ".$_POST['cantidad3']));
$pdf->Cell(30,12,("Cantidad: ".$_POST['cantidad4']));
$pdf->Ln(10);
$pdf->Cell(50,12,"Precio x Unidad: ".$_POST['preciou']);
$pdf->Cell(50,12,("Precio x Unidad: ".$_POST['preciou1']));
$pdf->Cell(50,12,("Precio x Unidad: ".$_POST['preciou2']));
$pdf->Cell(50,12,("Precio x Unidad: ".$_POST['preciou3']));
$pdf->Cell(50,12,("Precio x Unidad: ".$_POST['preciou4']));
$pdf->Ln(15);
$pdf->Cell(40,12,"NET: ".$_POST['net']);
$pdf->Cell(30,12,("NET: ".$_POST['net1']));
$pdf->Cell(30,12,("NET: ".$_POST['net2']));
$pdf->Cell(30,12,("NET: ".$_POST['net3']));
$pdf->Cell(30,12,("NET: ".$_POST['net4']));
$pdf->Ln(7);
$pdf->Cell(30,12,"NET Total: ".$_POST['totalnet']); 
$pdf->Ln(7);
$pdf->Cell(40,12,"IVA: ".$_POST['iva']);
$pdf->Cell(40,12,"IVA Total: ".$_POST['totaliva']); 
$pdf->Ln(15);
$pdf->Cell(70,12,"Descuento comercial(%): ".$_POST['descuento']);
$pdf->Cell(70,12,"Total Descuentos: ".$_POST['totaldescuento']); 
$pdf->Ln(15);
$pdf->Cell(100,12,"Total: ".$_POST['resultado']); 

$pdf->Ln(7);

$pdf->Output("factura.pdf",'F');

echo "<script language='javascript'>window.open('factura.pdf','_self','');</script>";//paral archivo pdf generado

exit;
?>