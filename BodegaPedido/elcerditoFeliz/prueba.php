<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>prueba multiplicacion</title>
	<link rel="stylesheet" href="">
	<script>
function multiplicar(){
  m1 = document.getElementById("multiplicando").value;
  m2 = document.getElementById("multiplicador").value;
  r = m1*m2;
  document.getElementById("resultado").value = r;
}
</script>
</head>
<body>
	<form method="POST" oninput="txtfechaEntrada.value=parseInt(valor1.value)+parseInt(valor2.value)">
    <input type="number" id="valor1" value="0"> 
    <input type="number" id="valor2" value="0"> 
    <input type="number" name="txtfechaEntrada" for="valor1 valor2">
</form>

<form id="multiplicar">
  <input type="text" id="multiplicando" value=0 onChange="multiplicar();"> X
  <input type="text" id="multiplicador" value=0 onChange="multiplicar();"> =
  <input type="text" id="resultado">
</form>
</body>
</html>