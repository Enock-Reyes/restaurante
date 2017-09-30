<?php
error_reporting(E_PARSE);
include '../library/configServer.php';
include '../library/consulSQL.php';
session_start();
$suma = 0;
if(isset($_GET['precio'])){
    $_SESSION['platillo'][$_SESSION['contador']] = $_GET['precio'];
    $_SESSION['contador']++;
}

echo '<table class="table table-bordered">';
for($i = 0;$i< $_SESSION['contador'];$i++){
    $consulta=ejecutarSQL::consultar("select * from platillos where codigoPlatillo='".$_SESSION['platillo'][$i]."'");
    while($fila = mysql_fetch_array($consulta)) {
            echo "<tr><td>".$fila['platillo']."</td><td> ".$fila['precio']."</td></tr>";
    $suma += $fila['precio'];
    }
}
echo "<tr><td>Subtotal</td><td>$".number_format($suma,2)."</td></tr>";
echo "</table>";
$_SESSION['sumaTotal']=$suma;