<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$codigoP= $_POST['codigoP'];
$nombre= $_POST['nombre'];
$razon= $_POST['razon'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];
$rfc= $_POST['rfc'];
$marca= $_POST['marca'];

if(!$nombre=="" && !$razon=="" && !$direccion=="" && !$telefono=="" && !$email=="" && !$rfc=="" && !$marca==""){
    $verificar=  ejecutarSQL::consultar("select * from proveedores where codigoProveedor='".$codigoP."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("proveedores", "nombre, razonSocial, direccion, telefono, email, rfc, codigoMarca", "'$nombre','$razon','$direccion','$telefono','$email', '$rfc', '$marca'")){
            echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Proveedor añadido éxitosamente</p>';
        }else{
           echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
        }
    }else{
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El número de NIT que ha ingresado ya existe.<br>Por favor ingrese otro número de NIT</p>';
    }
}else {
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Error los campos no deben de estar vacíos</p>';
}
