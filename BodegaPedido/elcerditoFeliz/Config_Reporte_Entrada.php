<?php
include 'Page3.php'; // archivos de inclusion la plantilla para el estilo del reporte
require 'Connect_DB.php'; // archivos requeridos para conectar a mysql y enlazar la tabla ala pagina del reporte


$StrQuery = "SELECT reE.idRegistroEntrada as Entrada, reE.fechaE as fecha, reE.cantidad, reE.costo, pro.razonSocial as Proveedor, emp.primerNombre as Empleado from registro_entrada reE, proveedores pro, empleados emp where reE.codigoProveedor = pro.codigoProveedor and reE.codigoEmpleado = emp.codigoEmpleado"; // generamos un query sql para pedirle los datos a la tabla del reporte
$resultado = $mysqli->query($StrQuery);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40,6,'Entrada', 1,0,'C', 1);
$pdf->Cell(20,6,'Fecha', 1,0,'C', 1);
$pdf->Cell(30,6,'Cantidad', 1,0,'C', 1);
$pdf->Cell(30,6,'Costo', 1,0,'C', 1);
$pdf->Cell(40,6,'Proveedor', 1,0,'C', 1);
$pdf->Cell(30,6,'Empleado', 1,1,'C', 1);


$pdf->SetFont('Arial', '', 8);
while($row = $resultado->fetch_assoc())
{
$pdf->Cell(40,6,$row['Entrada'], 1,0,'C', 0);
$pdf->Cell(20,6,$row['fecha'], 1,0,'C', 0);
$pdf->Cell(30,6,$row['cantidad'], 1,0,'C', 0);
$pdf->Cell(30,6,$row['costo'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['Proveedor'], 1,0,'C', 0);
$pdf->Cell(30,6,$row['Empleado'], 1,1,'C', 0);


}

$pdf->AddPage();
$pdf->Output();
?>