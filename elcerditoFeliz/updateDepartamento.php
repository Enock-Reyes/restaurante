<?php
$depID = $_POST['hid'];
$dep = $_POST['txtdepartamento'];
 
		
include('includes/connection.php');

$sql = "UPDATE departamentos SET nombre='$dep' WHERE idDepartamento='$depID'";

if(mysql_query($sql))
{
	header('location:verDepartamentos.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>