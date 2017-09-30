<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_nineteen();
	$fecha = date("y/m/d");
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Generar Registro de Salida</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="procesaSalida.php">
							<fieldset>
							
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Fecha de Salida:</label>
								<div class="controls">
								<input class="input-xlarge focused" oninvalid ="setCustomValidity('se requiere un formato de fecha adecuado')" 
        						 oninput ="setCustomValidity('')" required="true"  value ="<?= $fecha; ?>" name="txtFechaSalida" id="focusedInput" type="text" placeholder="solicitante">
								</div>
								</div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Solicitante del Registro de Salida:</label>
								<div class="controls">
								  <input class="input-xlarge focused" oninvalid ="setCustomValidity('se requiere un nombre nuevo o ya registrado')" oninput ="setCustomValidity('')" required="true" name="txtsolicitante" id="focusedInput" type="text" placeholder="solicitante">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Cantidad:</label>
								<div class="controls">
								  <input class="input-xlarge focused" oninvalid ="setCustomValidity('debe ingresar numeros comprendidos entre el 1 al 1000')" oninput ="setCustomValidity('')" required="required" name="txtcantidad" id="focusedInput" type="number" placeholder="Cantidad">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Persona Encargada:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtCodigoEmpleado" >
								 <?php
                $sql="select * from empleados";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option value="<?php echo $row["codigoEmpleado"] ?>" > <?php echo $row["primerNombre"] ?></option>
                   <?php                   
                }
                ?>
                </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Registrar Una nueva salida de bodegas</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		