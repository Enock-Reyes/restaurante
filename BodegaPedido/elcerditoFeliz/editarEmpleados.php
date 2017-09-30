<!DOCTYPE 
<html>
<head>
	<title></title>
	 <script src="libs/jquery-3.2.1.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
   <script src="functions.js"></script>
</head>
<body>

</body>
</html>
<?php
$userID = $_GET['empID'];

	include('includes/connection.php');

	$sql ="SELECT * from empleados where codigoEmpleado = $userID";
	$result = mysql_query($sql);
	$rowID = mysql_fetch_array($result);

	$num = mysql_num_rows($result);
	

	$i = 0;

	while ($i < $num)
	{
		$id = mysql_result($result,$i,"codigoEmpleado");
		$user = mysql_result($result,$i,"user");
		$password = mysql_result($result,$i,"password");
		$email = mysql_result($result,$i,"email");
		$telefono = mysql_result($result,$i,"telefono");
		$rol = mysql_result($result,$i,"rol");
		$puesto = mysql_result($result,$i,"codigoPuesto");
		$departamento = mysql_result($result,$i,"idDepartamento");
		$municipio = mysql_result($result,$i,"idMunicipio");
		$i++;
		
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_eight();
?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Actualizar Datos Del Cliente</h2>
						<div class="box-icon">
							<a href="clientes.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="updateEmpleados.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Usuario:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtuser" id="focusedInput" type="text" placeholder="Usuario" 
								  value="<?php echo $user; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" required="" title="Ingrese una Contraseña" 
								  >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">E-mail:</label>
								<div class="controls">
								  <input class="input-xlarge focused" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="focusedInput" name="txtemail" id="focusedInput" type="email" placeholder="E-mail"
								  value="<?php echo $email; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">telefono:</label>
								<div class="controls">
								  <input class="input-xlarge focused" pattern="[0-9]{8}" name="txttelefono" id="focusedInput" type="tel" placeholder="telefono"
								  value="<?php echo $telefono; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">rol:</label>
								<div class="controls">
								 <select name="txtrol" id="input" class="input-xlarge focused"" required="required">
					
						<option <?php echo ($rol == $rol ? "selected" : "s" ) ?> value="<?php echo ($rol ==1? "1" : "2" )?>"><?php echo ($rol ==1? "Administrador" : "Empleado" )?></option>
						<option  value="<?php echo ($rol ==2? "1" : "2" )?>"><?php echo ($rol ==2? "Administrador" : "Empleado" )?></option>
						
					</select><br>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Puesto:</label>
								<div class="controls">
								 <select class="input-xlarge focused" name="txtpuesto" >
                 <?php
                $sql="select * from puestos";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option <?php echo ($rowID['codigoPuesto']==$row["codigoPuesto"] ?  "selected" : "") ?> value="<?php echo $row["codigoPuesto"] ?>" > <?php echo $row["cargoLaboral"] ?></option>
                   <?php                   
                }
                ?>
            </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="DEP">Departamento</label>
								<div class="controls">
           						<select class="input-xlarge focused" name="Departamentos" id="Departamentos">
           						<option value="0">Seleccione</option>
          						</select>
								</div>
							  </div>
							   <div class="control-group">
								 <label class="control-label" for="MUNI">Municipio</label>
								 <div class="controls">
        						<select class="input-xlarge focused" name="Municipio" id="Municipio">
       							<option value="0">Seleccione</option>
       							 </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Guardar Cambios <i class="halflings-icon plus"></i></a></button>
								<input type="hidden" name="hid" value="<?php echo $id; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
 
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->