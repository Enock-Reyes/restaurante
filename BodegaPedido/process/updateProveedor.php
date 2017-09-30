<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codigoP=$_POST['codigoP'];
$nombre=$_POST['nombre'];
$razonSocial=$_POST['razon'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$rfc=$_POST['rfc'];
$marca=$_POST['marca'];


if(consultasSQL::UpdateSQL("proveedores", "nombre='$nombre', razonSocial='$razonSocial', direccion='$direccion', telefono='$telefono', email='$email', rfc='$rfc', codigoMarca='$marca'", "codigoProveedor='$codigoP'")){
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