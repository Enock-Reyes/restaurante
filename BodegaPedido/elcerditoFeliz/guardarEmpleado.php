<?php

$pnombre = $_POST['txtpnombre'];
$snombre = $_POST['txtsnombre'];
$papellido = $_POST['txtpapellido'];
$sapellido = $_POST['txtsapellido'];
$telefono = $_POST['txttelefono'];
$fecha = $_POST['txtfecha'];
$genero = $_POST['txtgenero'];
$salario = $_POST['txtsalario'];
$user = $_POST['txtuser'];
$password = $_POST['txtpassword'];
$email = ($_POST['txtemail']);
$rol = $_POST['txtrol'];
$puesto = $_POST['txtpuesto'];
$departamento = $_POST['Departamentos'];
$municipio = $_POST['Municipio'];

$password = password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));


include('includes/connection.php');

$sql = "INSERT INTO empleados VALUES('','$pnombre','$snombre','$papellido','$sapellido','$telefono','$fecha','', '$genero', '$salario', '$user', '$password', '$email', '$rol', '', '$puesto', '$departamento', '$municipio') ";

if (mysql_query($sql))
{
	header('location:empleados.php');
}
else
{
	die('Incapaz de Guardar Registro:' .mysql_error());
}

?>