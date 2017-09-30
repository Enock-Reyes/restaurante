<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Guardar Registro De Un Nuevo Cliente</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtnombre" id="focusedInput" type="text" placeholder="Nombre" required="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Apellido:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtapellido" id="focusedInput" type="text" placeholder="Apellido">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="focusedInput" type="Email" placeholder="E-mail" required="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" placeholder="Password" required="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Direccion:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdireccion" id="focusedInput" type="text" placeholder="Direccion">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Telefono:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttelefono" id="focusedInput" type="tel" pattern="[0-9]{8}" placeholder="Telefono">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Registrar Nuevo Cliente</button>
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