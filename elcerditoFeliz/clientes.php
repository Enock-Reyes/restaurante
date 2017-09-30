<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_five();
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white "></i><span class="break"></span>Tablas Clientes</h2>
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
								  <th>Nombre</th>
								  <th>Apellido</th>
								  <th>Email</th>
								  <th>Direccion</th>
								  <th>telefono</th>
								  <th>Editar</th>

							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT * from clientes";
								$result=mysql_query($sql); //rs.open sql,con

							while ($row=mysql_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['codigoCliente']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['apellido']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['direccion']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td class="center">
									<a class="btn btn-info" href="editarCliente.php?eID=<?php echo $row['codigoCliente']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="deleteClientes.php?deID=<?php echo $row['codigoCliente'];?>">
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

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->