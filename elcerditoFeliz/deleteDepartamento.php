<?php
$id = $_GET['delDID'];

include('includes/connection.php');

$sql = "DELETE FROM departamentos WHERE idDepartamento=$id";
if(mysql_query($sql))
{
	header('location:verDepartamentos.php');
}
else
{
	die('No se Puede Borrar el Registro:' .mysql_error());
}
?>