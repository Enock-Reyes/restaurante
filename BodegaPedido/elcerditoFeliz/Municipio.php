<?php

$conexion = mysqli_connect("localhost","root","","elcerditofeliz");

$el_Departamento = $_POST['Departamentos'];

$query = $conexion->query("SELECT * FROM municipios WHERE idDepartamento = $el_Departamento");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idMunicipio']. '">' . $row['nombre'] . '</option>' . "\n";
}

#$this->validate();