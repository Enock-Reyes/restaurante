<?php
$userID = $_GET['eID'];

	include('includes/connection.php');

	$sql ="SELECT * from clientes where codigoCliente = $userID";
	$result = mysql_query($sql);

	$num = mysql_num_rows($result);

	$i = 0;

	while ($i < $num)
	{
		$id = mysql_result($result,$i,"codigoCliente");
		$nombre = mysql_result($result,$i,"nombre");
		$apellido = mysql_result($result,$i,"apellido");
		$email = mysql_result($result,$i,"email");
		$password = mysql_result($result,$i,"password");
		$direccion = mysql_result($result,$i,"direccion");
		$telefono = mysql_result($result,$i,"telefono");
		$i++;
		
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
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
						<form class="form-horizontal" method="post" action="updateClientes.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtnombre" id="focusedInput" type="text" placeholder="Nombre" 
								  value="<?php echo $nombre; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Apellido:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtapellido" id="focusedInput" type="text" placeholder="Apellido"
								  value="<?php echo $apellido; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">E-mail:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtemail" id="focusedInput" type="email" placeholder="E-mail"
								  value="<?php echo $email; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="password"
								  value="<?php echo $password; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Direccion:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdireccion" id="focusedInput" type="text" placeholder="direccion"
								  value="<?php echo $direccion; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Telefono:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttelefono" id="focusedInput" type="text" placeholder="telefono"
								  value="<?php echo $telefono; ?>">
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