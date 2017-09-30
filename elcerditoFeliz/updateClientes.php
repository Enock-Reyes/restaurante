<?php
$id = $_POST['hid'];
$nombre = $_POST['txtnombre'];
$apellido  = $_POST['txtapellido'];
$email = $_POST['txtemail'];
$password  = $_POST['txtpassword'];
$direccion = $_POST['txtdireccion'];
$telefono = $_POST['txttelefono'];

$password = sha1($password);	 
		
	  
	
		

include('includes/connection.php');

$sql = "UPDATE clientes  SET nombre='$nombre', apellido='$apellido', email='$email', password='$password', direccion='$direccion', telefono='$telefono' WHERE codigoCliente='$id'";

if(mysql_query($sql))
{
	header('location:clientes.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>