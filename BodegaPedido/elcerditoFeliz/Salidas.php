<?php
require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_sixteen();
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white "></i><span class="break"></span>Vista de bodegas</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Fecha de Salida</th>
								  <th>Persona Solicitante</th>
								  <th>Cantidad</th>
								  <th>Empleado de Registro</th>  
								  <th>Editar Registro</th>

							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT reS.idRegistroSalida, reS.fecha, res.personaSolicitante, reS.cantidad, emp.primerNombre from registro_salida reS, empleados emp where reS.codigoEmpleado = emp.codigoEmpleado";
								$result=mysql_query($sql); //rs.open sql,con

							while ($row=mysql_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['idRegistroSalida']; ?></td>
								<td><?php echo $row['fecha']; ?></td>
								<td><?php echo $row['personaSolicitante']; ?></td>
								<td><?php echo $row['cantidad']; ?></td>
								<td><?php echo $row['primerNombre']; ?></td>
								<td class="center">
									<a class="btn btn-info" href="editarSalida.php?gID=<?php echo $row['idRegistroSalida']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="deleteSalidas.php?deltID=<?php echo $row['idRegistroSalida'];?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>
