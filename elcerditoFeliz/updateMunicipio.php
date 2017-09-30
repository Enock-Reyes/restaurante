<?php
$muID = $_POST['hid'];
$dep = $_POST['txtdepartamento'];
$codMu = $_POST['txtcodMu'];
$Mu = $_POST['txtMu'];


 
		
include('includes/connection.php');

$sql = "UPDATE municipios SET idDepartamento='$dep', codMunicipio='$codMu', nombre='$Mu' WHERE idMunicipio='$muID'";

if(mysql_query($sql))
{
	header('location:verMunicipio.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>