<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_eleven();
?>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Estados de entrada y salida de Bodegas</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					<form class="form-horizontal" method="post" action="Config_Reporte_Entrada.php">
							<fieldset>
							  <div class="control-group">
							  <div class="form-actions">
							  <legend>Pulse el Boton Para Imprimir el Reporte de Entradas</legend>
								<button type="submit" onclick="return confirmPrint()" class="btn btn-danger"><i class= "halflings-icon print"></i>Imprimir Reporte de Entrada</button>
								

							  </div>
							</fieldset>
						</form>
						<form class="form-horizontal" method="post" action="Config_Reporte_Salida.php">
							<fieldset>
							  <div class="control-group">
							  <div class="form-actions">
							  <legend>Pulse el Boton Para Imprimir el Reporte de Salida</legend>
								
								<button type="submit" onclick="return confirmPrint()" class="btn btn-danger"><i class= "halflings-icon print"></i>Imprimir Reporte de Salida</button>
							

							  </div>
							</fieldset>
						</form>
						<form class="form-horizontal" method="post" action="Config_Reporte_Bodega.php">
							<fieldset>
							  <div class="control-group">
							  <div class="form-actions">
							  <legend>Pulse el Boton Para Imprimir el Reporte de Bodegas</legend>
														
								<button type="submit" onclick="return confirmPrint()" class="btn btn-danger"><i class= "halflings-icon print"></i>Imprimir Reporte de Bodegas</button>

							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		