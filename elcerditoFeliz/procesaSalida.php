<?php
$fecha_salida = $_POST['txtFechaSalida'];
$solicitante = $_POST['txtsolicitante'];
$cantidad = $_POST['txtcantidad'];
$cEmpleado = $_POST['txtCodigoEmpleado'];

include('includes/connection.php');

$sql = "INSERT INTO registro_salida VALUES('','$fecha_salida', '$solicitante', '$cantidad', '$cEmpleado') ";
if (mysql_query($sql))
{
	header('location:Salidas.php');
}
else
{
	die('Incapaz de Guardar Registro:' .mysql_error());
}

?>



?>