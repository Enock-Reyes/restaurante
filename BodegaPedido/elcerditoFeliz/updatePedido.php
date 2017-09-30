<?php
sleep(3);


$numPediUp=$_POST['num-pedido'];
$estadPediUp=$_POST['pedido-status'];

include('includes/connection.php');

$sql = "Update facturas set Estado='$estadPediUp' where NumPedido='$numPediUp'";
if(mysql_query($sql)){
    echo '
    <br>
    <img class="center-all-contens" src="img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 3 segundos
    </p>
    <script>
        location.href="Pedidos.php";
    </script>
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 3 segundos
    </p>
    <script>
       location.href="Pedidos.php";
    </script>
 ';
}