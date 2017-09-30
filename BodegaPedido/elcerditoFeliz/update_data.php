<?php
$autoid = $_POST['hid'];
$producto = $_POST['txtproductos'];
$razon  = $_POST['txtproveedores'];
$marca = $_POST['txtmarca'];
$unidad  = $_POST['txtunidad'];
$precioU = $_POST['txtprecioU'];
$precioT = $_POST['txtprecioT'];
$fechaE = $_POST['txtfechaE'];
$fechaS = $_POST['txtfechaS'];
	 
		
	  
	
		

include('includes/connection.php');

$sql = "UPDATE bodegas  SET idProducto='$producto', codigoProveedor='$razon', codigoMarca='$marca', unidad='$unidad', precioUnitario='$precioU', precioTotal='$precioT', Entrada='$fechaE', Salida='$fechaS' WHERE codigoBodega='$autoid'";

#$sql = "UPDATE bodegas b, proveedores pro, productos p, marcas m  SET p.nombreProducto='$producto', pro.razonSocial='$razon', m.marca='$marca', b.unidad='$unidad', b.precioUnitario='$precioU', b.precioTotal='$precioT', b.Entrada='$fechaE', b.Salida='$fechaS' WHERE b.idProducto = p.idProducto and b.codigoProveedor = pro.codigoProveedor AND b.codigoMarca = m.codigoMarca  and b.codigoBodega='$autoid'";

if(mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>