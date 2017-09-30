<?php
$AdminAutoId = $_POST['aUN'];
$pw = $_POST['txtpassword'];

include('includes/connection.php');

$sql = "UPDATE empleados SET password='$pw' WHERE codigoEmpleado=$AdminAutoId";

if(mysql_query($sql))
{
	header('location:logout.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}

?>