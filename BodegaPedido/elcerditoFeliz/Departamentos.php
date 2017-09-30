<?php

$conexion = mysqli_connect("localhost","root","","elcerditofeliz");

$query = $conexion->query("SELECT * FROM departamentos");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idDepartamento']. '">' . $row['nombre'] . '</option>' . "\n";
}