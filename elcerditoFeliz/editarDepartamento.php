<!DOCTYPE 
<html>
<head>
	<title></title>
	 <script src="libs/jquery-3.2.1.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="icon" href="images/pig.jpg" type="image/x-icon">
  <script type="text/javascript" src="ajax.js"></script>
   <script src="functions.js"></script>
</head>
<body>

</body>
</html>
<?php
$depID = $_GET['depID'];

	include('includes/connection.php');

	$sql ="SELECT * from departamentos where idDepartamento = $depID";
	$result = mysql_query($sql);
	$rowID2 = mysql_fetch_array($result);
	$num = mysql_num_rows($result);
	

	$i = 0;

	while ($i < $num)
	{
		$id = mysql_result($result,$i,"idDepartamento");
		$nombre = mysql_result($result,$i,"nombre");
		$i++;
		
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_fourteen();
?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Actualizar los Departamentos</h2>
						<div class="box-icon">
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="updateDepartamento.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Departamentos:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdepartamento" id="focusedInput" type="text" placeholder="departamento" 
								  value="<?php echo $nombre; ?>">
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