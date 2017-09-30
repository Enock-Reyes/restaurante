<?php
$gID = $_GET['gID'];

	include('includes/connection.php');

	$sql ="SELECT * from registro_salida where idRegistroSalida = $gID";
	$result = mysql_query($sql);
	$rowID = mysql_fetch_array($result);

	$num = mysql_num_rows($result);

	$i = 0;

	while ($i < $num)
	{
		$id = mysql_result($result,$i,"idRegistroSalida");
		$fecha = mysql_result($result,$i,"fecha");
		$personaSolicitante = mysql_result($result,$i,"personaSolicitante");
		$cantidad = mysql_result($result,$i,"cantidad");
		$codigoEmpleado = mysql_result($result,$i,"codigoEmpleado");
		$i++;
		
	}
	

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_seventeen();

?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Actualizar Datos De Salidas</h2>
						<div class="box-icon">
							<a href="clientes.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="updateSalidas.php">
							<fieldset>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Fecha de Salida:</label>
								<div class="controls">
								<input class="input-xlarge focused" oninvalid ="setCustomValidity('se requiere un formato de fecha adecuado')" 
        						 oninput ="setCustomValidity('')" required="true"  value ="<?= $fecha; ?>" name="fechaS" id="focusedInput" type="text" placeholder="solicitante">
								</div>
								</div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Solicitante del Registro de Salida:</label>
								<div class="controls">
								  <input class="input-xlarge focused" oninvalid ="setCustomValidity('se requiere un nombre nuevo o ya registrado')" oninput ="setCustomValidity('')" required="true" value="<?php echo $personaSolicitante; ?>" name="txtsolicitante" id="focusedInput" type="text" placeholder="solicitante">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Cantidad:</label>
								<div class="controls">
								  <input class="input-xlarge focused" oninvalid ="setCustomValidity('debe ingresar numeros comprendidos entre el 1 al 1000')" oninput ="setCustomValidity('')" required="required"  value ="<?php echo $cantidad; ?>" name="txtcantidad" id="focusedInput" type="number" placeholder="Cantidad">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Codigo de Empleado:</label>
								<div class="controls">
								 			 <select class="input-xlarge focused" name="txtCodigoEmpleado" >
                 <?php
                $sql="select * from empleados";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option <?php echo ($rowID['codigoEmpleado']==$row["codigoEmpleado"] ?  "selected" : "") ?> value="<?php echo $row["codigoEmpleado"] ?>" > <?php echo $row["primerNombre"] ?></option>
                   <?php                   
                }
                ?>
            </select>
							  </div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Registrar Una nueva salida de bodegas</button>
								<input type="hidden" name="sID" value="<?php echo $id; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>
