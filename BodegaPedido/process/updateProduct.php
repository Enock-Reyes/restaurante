<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$platillo=$_POST['platillo'];
$platilloT=$_POST['platilloT'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$stock=$_POST['stock'];
$codigoCat=$_POST['categoria'];
$proveedor=$_POST['proveedor'];

if(consultasSQL::UpdateSQL("platillos", "platillo='$platillo',tipoPlatillo='$platilloT',precio='$precio',descripcion='$descripcion',Stock='$stock',CodigoCat='$codigoCat',codigoProveedor='$proveedor'", "CodigoPlatillo='$codeOldProdUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}