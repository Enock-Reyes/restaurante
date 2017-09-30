<?php
include 'Page2.php'; // archivos de inclusion la plantilla para el estilo del reporte
require 'Connect_DB.php'; // archivos requeridos para conectar a mysql y enlazar la tabla ala pagina del reporte


$StrQuery = "SELECT reS.idRegistroSalida, reS.fecha, reS.personaSolicitante,
reS.cantidad, emp.primerNombre as empleado
from registro_salida reS, empleados emp where reS.codigoEmpleado = emp.codigoEmpleado"  ; // generamos un query sql para pedirle los datos a la tabla del reporte
$resultado = $mysqli->query($StrQuery);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40,6,'ID Salida', 1,0,'C', 1);
$pdf->Cell(40,6,'Fecha', 1,0,'C', 1);
$pdf->Cell(40,6,'Solicitante', 1,0,'C', 1);
$pdf->Cell(40,6,'Cantidad', 1,0,'C', 1);
$pdf->Cell(30,6,'Empleado', 1,1,'C', 1);



$pdf->SetFont('Arial', '', 8);
while($row = $resultado->fetch_assoc())
{
$pdf->Cell(40,6,$row['idRegistroSalida'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['fecha'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['personaSolicitante'], 1,0,'C', 0);
$pdf->Cell(40,6,$row['cantidad'], 1,0,'C', 0);
$pdf->Cell(30,6,$row['empleado'], 1,1,'C', 0);


}

$pdf->AddPage();
$pdf->Output();
?>