<?php

$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$email = $_POST['txtemail'];
$password = ($_POST['txtpassword']);
$direccion = $_POST['txtdireccion'];
$telefono = $_POST['txttelefono'];


$password = sha1($password);


include('includes/connection.php');

$sql = "INSERT INTO clientes VALUES('','$nombre','$apellido','$email','$password','$direccion','$telefono') ";

if (mysql_query($sql))
{
	header('location:clientes.php');
}
else
{
	die('Incapaz de Guardar Registro:' .mysql_error());
}

?>