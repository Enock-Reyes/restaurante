<?php
$id = $_GET['deltID'];

include('includes/connection.php');

$sql = "DELETE FROM registro_salida WHERE idRegistroSalida=$id";
if(mysql_query($sql))
{
	header('location:Salidas.php');
}
else
{
	die('No se Puede Borrar el Registro:' .mysql_error());
}
?>