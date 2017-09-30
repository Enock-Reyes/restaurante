<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM bodegas WHERE codigoBodega=$id";
if(mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('No se Puede Borrar el Registro:' .mysql_error());
}
?>