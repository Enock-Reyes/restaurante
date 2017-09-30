<?php
$id = $_GET['deID'];

include('includes/connection.php');

$sql = "DELETE FROM clientes WHERE codigoCliente=$id";
if(mysql_query($sql))
{
	header('location:clientes.php');
}
else
{
	die('No se Puede Borrar el Registro:' .mysql_error());
}
?>