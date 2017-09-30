<?php
include 'plantilla.php'; // archivos de inclusion la plantilla para el estilo del reporte
require 'Connect_DB.php'; // archivos requeridos para conectar a mysql y enlazar la tabla ala pagina del reporte


$StrQuery = "SELECT b.codigoBodega, pro.razonSocial, p.nombreProducto, b.unidad,
b.cantidad, b.precioTotal
from bodegas b, proveedores pro, productos p where b.codigoProveedor = pro.codigoProveedor and b.idProducto = p.idProducto"  ; // generamos un query sql para pedirle los datos a la tabla del reporte
$resultado = $mysqli->query($StrQuery);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40,6,'codigo Bodega', 1,0,'C', 1);
$pdf->Cell(40,6,'Proveedor', 1,0,'C', 1);
$pdf->Cell(40,6,'Producto', 1,0,'C', 1);
$pdf->Cell(40,6,'Unidad', 1,0,'C', 1);
$pdf->Cell(40,6,'Cantidad', 1,0,'C', 1);
$pdf->Cell(30,6,'Precio Total', 1,1,'C', 1);



$pdf->SetFont('Arial', '', 8);
while($row = $resultado->fetch_assoc())
{
$pdf->Cell(40,6,$row['codigoBodega'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['razonSocial'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['nombreProducto'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['unidad'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['cantidad'], 1,0,'C', 0);
$pdf->Cell(30,6,$row['precioTotal'], 1,1,'C', 0);


}

$pdf->AddPage();
$pdf->Output();
?>