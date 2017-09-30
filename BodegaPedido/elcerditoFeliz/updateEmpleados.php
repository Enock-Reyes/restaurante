<?php
$id = $_POST['hid'];
$user = $_POST['txtuser'];
$password  = $_POST['txtpassword'];
$email = $_POST['txtemail'];
$telefono   = $_POST['txttelefono'];
$rol = $_POST['txtrol'];
$puesto = $_POST['txtpuesto'];
$departamento = $_POST['Departamentos'];
$municipio = $_POST['Municipio'];


$password = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));	 
		
include('includes/connection.php');

$sql = "UPDATE empleados  SET user='$user', password='$password', email='$email', telefono='$telefono', rol='$rol', codigoPuesto='$puesto', idDepartamento='$departamento', idMunicipio='$municipio' WHERE codigoEmpleado='$id'";

if(mysql_query($sql))
{
	header('location:empleados.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>