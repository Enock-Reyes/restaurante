<?php
$id = $_GET['delMuID'];

include('includes/connection.php');

$sql = "DELETE FROM municipios WHERE idMunicipio=$id";
if(mysql_query($sql))
{
	header('location:verMunicipio.php');
}
else
{
	die('No se Puede Borrar el Registro:' .mysql_error());
}
?>