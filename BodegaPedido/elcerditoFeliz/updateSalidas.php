<?php
$sID = $_POST['sID'];
$fecha = $_POST['fechaS'];
$solicitante = $_POST['txtsolicitante'];
$cantidad = $_POST['txtcantidad'];
$cEmpleado = $_POST['txtCodigoEmpleado'];

include('includes/connection.php');
$sql = "UPDATE registro_salida SET fecha='$fecha', personaSolicitante='$solicitante', cantidad='$cantidad', codigoEmpleado='$cEmpleado' WHERE idRegistroSalida='$sID'";

if(mysql_query($sql))
{
	header('location:Salidas.php');
}
else
{
	die('Error al actualizar el registro: ' .mysql_error());
}
?>
