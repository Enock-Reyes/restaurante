<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_ten();
?>
<script>
function multiplicar(){
  m1 = document.getElementById("multiplicando").value;
  m2 = document.getElementById("multiplicador").value;
  r = m1*m2;
  document.getElementById("resultado").value = r;
}
</script>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Guardar Registro De Bodegas</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" oninput="txtfechaEntrada.value=parseInt(valor1.value)*parseInt(valor2.value)" action="guardarBodegas.php" >
						
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Productos:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtproductos" >
								 <?php
                $sql="select * from productos";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option value="<?php echo $row["idProducto"] ?>" > <?php echo $row["nombreProducto"] ?></option>
                   <?php                   
                }
                ?>
                </select>
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Proveedores:</label>
								<div class="controls">
								 <select class="input-xlarge focused" name="txtproveedores" >
								 <?php
                $sql="select * from proveedores";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option value="<?php echo $row["codigoProveedor"] ?>" > <?php echo $row["razonSocial"] ?></option>
                   <?php                   
                }
                ?>
                </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Marcas:</label>
								<div class="controls">
								 <select class="input-xlarge focused" name="txtmarcas" >
								 <?php
                $sql="select * from marcas";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option value="<?php echo $row["codigoMarca"] ?>" > <?php echo $row["marca"] ?></option>
                   <?php                   
                }
                ?>
                </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Unidad de Medida:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtunidad">
								  	<option value="lb">lb</option>
								  		<option value="kg">kg</option>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Cantidad a ingresar:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcantidad" title="Introduce valores del 1 al 1000"   type="number" placeholder="Cantidad a Ingresar"id="multiplicando" value=0 onChange="multiplicar();">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Precio por Unidad:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtprecioUnitario" title="Introduce valores con decimal"  type="text" placeholder="Precio por Unidad" id="multiplicador" value=0 onChange="multiplicar();">
								</div>
							  </div>
							    <div class="control-group">
								<label class="control-label" for="focusedInput">Precio Total:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtprecioTotal" title="Introduce valores con decimal" type="text" placeholder="Precio Total" id="resultado">
								</div>
							  </div>
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Registro de Entrada:</label>
								<div class="controls">
								 <select class="input-xlarge focused" type="text"  name="txtfechaEntrada" ><option value="SI">SI</option>
								 	<option value="NO">NO</option>
							</select>							 	
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Registro de Salida:</label>
								<div class="controls">
								 <select type="text" class="input-xlarge focused" name="txtfechaSalida" >
								 <option value="SI">SI</option>
								 <option value="NO">NO</option>
                </select> 
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Registrar Una Nueva Entrada a Bodegas</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		