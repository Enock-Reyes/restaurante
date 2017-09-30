<?php

$productos = $_POST['txtproductos'];
$proveedores = $_POST['txtproveedores'];
$marcas = $_POST['txtmarcas'];
$unidad = $_POST['txtunidad'];
$cantidad = $_POST['txtcantidad'];
$precioU = $_POST['txtprecioUnitario'];
$precioT = $_POST['txtprecioTotal'];
$fechaE = $_POST['txtfechaEntrada'];
$fechaS = $_POST['txtfechaSalida'];


include('includes/connection.php');

$sql = "INSERT INTO bodegas VALUES('','$productos','$proveedores','$marcas','$unidad','$cantidad','$precioU', '$precioT', '$fechaE', '$fechaS') ";

if (mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('Incapaz de Guardar Registro:' .mysql_error());
}

?>