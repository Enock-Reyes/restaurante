<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$proveedor= $_POST['proveedor'];
$cons=  ejecutarSQL::consultar("select * from proveedores where codigoProveedor='$proveedor'");
$totalprove = mysql_num_rows($cons);

if($totalprove>0){
    if(consultasSQL::DeleteSQL('proveedores', "codigoProveedor='".$proveedor."'")){
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Proveedor eliminado éxitosamente</p>';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código de proveedor no existe</p>';
}