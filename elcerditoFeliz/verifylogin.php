<?php
session_start();
	require("connect_db.php");

$email = $_POST['correo'];
$pwd = $_POST['password'];
$contador=0;

$sql=mysqli_query($mysqli,"SELECT * FROM empleados WHERE email='$email'");
if($f=mysqli_fetch_assoc($sql)){
		$pwd==$f['password'];
		if(password_verify($pwd, $f['password'])){
			$contador++;
			$_SESSION['codigoEmpleado']=$f['codigoEmpleado'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

		}
if ($contador>0){

		//echo "<script>alert('Bienvenido');</script>";
			 echo "<script>location.href='index.php'</script>";

		}else{
			echo "<script>alert('Contraseña incorrecta');</script>";
		
			echo "<script>location.href='login.php'</script>";

		}
	}else{
		echo "<script>alert('ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR');</script>";
		echo "<script>location.href='login.php'</script>";	
	}
?>


?>
