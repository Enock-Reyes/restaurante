<?php
$userID = $_GET['uID'];

	include('includes/connection.php');

	$sql ="SELECT * from bodegas where codigoBodega = $userID";
	$result = mysql_query($sql);
	$rowID1 = mysql_fetch_array($result);

	$num = mysql_num_rows($result);

	$i = 0;

	while ($i < $num)
	{
		$autoid = mysql_result($result,$i,"codigoBodega");
		
		;
		
		$unidad = mysql_result($result,$i,"unidad");
		$pUnitario = mysql_result($result,$i,"precioUnitario");
		$precioT = mysql_result($result,$i,"precioTotal");
		$fechaE = mysql_result($result,$i,"Entrada");
		$fechaS = mysql_result($result,$i,"Salida");
		$i++;
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Actualizar Datos De Bodega</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nombre Productos:</label>
								<div class="controls">
								 <select class="input-xlarge focused" name="txtproductos" >
								 <?php
                $sql="select * from productos";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option <?php echo ($rowID1['idProducto']==$row["idProducto"] ?  "selected" : "") ?> value="<?php echo $row["idProducto"] ?>" > <?php echo $row["nombreProducto"] ?></option>
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
                   <option <?php echo ($rowID1['codigoProveedor']==$row["codigoProveedor"] ?  "selected" : "") ?> value="<?php echo $row["codigoProveedor"] ?>" > <?php echo $row["razonSocial"] ?></option>
                   <?php                   
                }
                ?>
                </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Marca:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtmarca" >
								 <?php
                $sql="select * from marcas";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option <?php echo ($rowID1['codigoMarca']==$row["codigoMarca"] ?  "selected" : "") ?> value="<?php echo $row["codigoMarca"] ?>" > <?php echo $row["marca"] ?></option>
                   <?php                   
                }
                ?>
                </select>
								</div>
							  </div>
							  <div class="control-group"> 
								<label class="control-label" for="focusedInput">Unidad:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtunidad" id="focusedInput" type="text" placeholder="Unidad"
								  value="<?php echo $unidad; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Precio Unitario:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtprecioU" id="focusedInput" type="text" placeholder="Precio Unitario"
								  value="<?php echo $pUnitario; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Precio Total:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtprecioT" id="focusedInput" type="text" placeholder="Precio Total"
								  value="<?php echo $precioT; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Registro de Entrada:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtfechaE" >
								  	<option value="SI">SI</option>
								  	<option value="NO">NO</option>
								 <!-- <?php
                $sql="select * from bodegas";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option <?php echo ($rowID1['codigoBodega']==$row["codigoBodega"] ?  "selected" : "") ?> value="<?php echo $row["codigoBodega"] ?>" > <?php echo $row["Entrada"] ?></option>
                   <?php                   
                }
                ?> -->
                </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Registro de Salida:</label>
								<div class="controls">
								  <select class="input-xlarge focused" name="txtfechaS" >
								  	<option value="SI">SI</option>
								  	<option value="NO">NO</option>
								<!-- <?php
                $sql="select * from bodegas";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option <?php echo ($rowID1['codigoBodega']==$row["codigoBodega"] ?  "selected" : "") ?> value="<?php echo $row["codigoBodega"] ?>" > <?php echo $row["Salida"] ?></option>
                   <?php                   
                }
                ?> -->
                </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Guardar Cambios <i class="halflings-icon plus"></i></a></button>
								<input type="hidden" name="hid" value="<?php echo $autoid; ?>">
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