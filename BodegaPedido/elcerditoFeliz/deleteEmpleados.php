<?php
$id = $_GET['delEID'];

include('includes/connection.php');

$sql = "DELETE FROM empleados WHERE codigoEmpleado=$id";
if(mysql_query($sql))
{
	header('location:empleados.php');
}
else
{
	die('No se Puede Borrar el Registro:' .mysql_error());
}
?>