<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
}elseif (@$_SESSION['rol']==2) {
	header("Location:index3.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="elcerditoFeliz">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	   <link rel="icon" href="images/pig.jpg" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.:: BodegaElcerditoFeliz ::.</title>
	<script type="text/javascript">
	function confirmDel()
	{
		var x = confirm("Desea completar dicha operacion?");

		if (x==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function confirmAdd()
	{
		var a = confirm("Desea Aplicar la adicion de este registro?");

		if(a==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function confirmUpdate()
	{
		var b = confirm("Esta seguro de modificar y actualizar dicho registro?");

		if(b==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function confirmUpdateAdmin()
	{
		var c = confirm("Esta seguro de cambiar la informacion?");

		if(c==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/favicon.ico">
	  <link rel="stylesheet" href=" http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span> </span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- <li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								1 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 1 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
							</ul>
						</li> -->
						<!-- start: Notifications Dropdown -->
						<!-- <li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-calendar"></i>
								<span class="badge red">
								2 </span>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 2 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
							</ul>
						</li> -->
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<!-- <li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								3 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 3 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>		
							</ul>
						</li> -->
						
						<!-- start: User Dropdown -->
						<?php
								include("includes/connection.php");
								$sql = "SELECT * FROM empleados";
								$result=mysql_query($sql); //rs.open sql,con

							while ($row=mysql_fetch_array($result))
							 ?>
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Administrador/<strong><?php echo $_SESSION['user'];?></strong>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<!--<li class="dropdown-menu-title">
 									<span>Herramientas</span>
								</li> -->
								
								<!-- <li><a href="change_admin_password.php?aUN=<?php echo $row['user']; ?>"><i class="halflings-icon cog"></i> Cambiar Contraseña
								</a></li> -->
								<li><a href="logout.php"><i class="halflings-icon off"></i>Salir del Sistema</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->