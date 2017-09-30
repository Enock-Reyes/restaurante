
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_nine();
?>
<!DOCTYPE 
<html>
<head>
  <title></title>
   <script src="libs/jquery-3.2.1.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
   <script src="functions.js"></script>
</head>
<body>

</body>
</html>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Registro de Nuevo Empleado</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
				<div class="box-content">
            <form class="form-horizontal" method="post" action="guardarEmpleado.php">
              <fieldset>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Primer Nombre:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtpnombre" id="focusedInput" type="text" placeholder="Primer Nombre">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Segundo Nombre:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtsnombre" id="focusedInput" type="text" placeholder="Segundo Nombre">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Primer Apellido:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtpapellido" id="focusedInput" type="text" placeholder="Primer Apellido">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Segundo Apellido:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtsapellido" id="focusedInput" type="text" placeholder="Segundo Nombre">
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Telefono:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txttelefono" id="focusedInput" type="text" placeholder="Telefono">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">fecha Nacimiento:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtfecha" id="focusedInput" type="date" placeholder="fecha">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Genero:</label>
                <div class="controls">
                  <input type="checkbox" class="form-horizontal" name="txtgenero"  value="M">Masculino<br>
                  <input type="checkbox" class="form-horizontal" name="txtgenero"  value="F">Femenino
                </div>
                </div>

                <div class="control-group">
                <label class="control-label" for="focusedInput">Salario:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtsalario" id="focusedInput" type="text" placeholder="Salario">
                </div>
                </div>

              <div class="col-md-5">
                <div  class="control-group">
                <label class="control-label" for="focusedInput">Usuario:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtuser" id="focusedInput" type="text" placeholder="Usuario">
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Contraseña:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="Password" placeholder="Password">
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Correo:</label>
                <div class="controls">
                  <input class="input-xlarge focused" name="txtemail" id="focusedInput" type="email" placeholder="Correo">
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Rol:</label>
                <div class="controls">
                 <select name="txtrol" id="input" class="input-xlarge focused"" required="required">
          
            <option  value="1">Administrador</option>
            <option  value="2">Empleado</option>
            
          </select>
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Cargo Laboral:</label>
                <div class="controls">
                 <select class="input-xlarge focused" name="txtpuesto" >
                 <?php
                $sql="select * from puestos";
                $rec=mysql_query($sql);
                while($row=mysql_fetch_array($rec))
                 
                {
                   ?>
                   <option value="<?php echo $row["codigoPuesto"] ?>" > <?php echo $row["cargoLaboral"] ?></option>
                   <?php                   
                }
                ?>
            </select>
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Departamento:</label>
                <div class="controls">
                 <select class="input-xlarge focused" name="Departamentos" id="Departamentos">
                      <option value="0">Seleccione</option>
                      </select>
                </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="focusedInput">Municipio:</label>
                <div class="controls">
                  <select class="input-xlarge focused" name="Municipio" id="Municipio">
                    <option value="0">Seleccione</option>
                     </select>
                </div>
                </div>
                
                

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">RECUERDA! <i class="glyphicon glyphicon-thumbs-up"></i> Pregunta los datos completos al Usuario.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Registrar Empleado <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    </body>
</html>
<?php
	get_footer();
?>		