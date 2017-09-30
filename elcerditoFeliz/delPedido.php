<?php
session_start();
include('includes/connection.php');
sleep(5);
$NumPedidoDel= $_POST['num-pedido'];
$consP="select * from facturas where NumPedido='$NumPedidoDel'";
$totalP= mysql_num_rows($consP);


	$sql = "DELETE FROM facturas WHERE NumPedido=$NumPedidoDel";
	$sql1 = "DELETE FROM detalle WHERE NumPedido=$NumPedidoDel";
    if(mysql_query($sql, $sql1)){
        
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Pedido eliminado éxitosamente</p>';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
