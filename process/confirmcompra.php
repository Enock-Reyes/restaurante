<?php
session_start(); 

include '../library/configServer.php';
include '../library/consulSQL.php';
$num=$_POST['clien-number'];
if($num=='notlog'){
   $nameClien=$_POST['clien-name'];
   $passClien=  md5($_POST['clien-pass']); 
}
if($num=='log'){
   $nameClien=$_POST['clien-name'];
   $passClien=$_POST['clien-pass']; 
}
sleep(3);

$verdata=  ejecutarSQL::consultar("select * from clientes where password='".$passClien."' and nombre='".$nameClien."'");
$num=  mysql_num_rows($verdata);
if($num>0){
  if($_SESSION['sumaTotal']>0){


  $data= mysql_fetch_array($verdata);
  $nitC=$data['codigoCliente'];
  $StatusV="Pendiente";
  
  /*Insertando datos en tabla venta*/
  consultasSQL::InsertSQL("facturas", "nombre, apellido, direccion, formaDePago, Fecha, Descuento, totalPagar, codigoPlatillo, codigoCliente, codigoTarjeta, Estado", "'user', 'user', 'direccion', 'EFECTIVO', '".date('d-m-Y')."','1','".$_SESSION['sumaTotal']."', '1', '".$nitC."', '1', '".$StatusV."'");
  
  /*recuperando el número del pedido actual*/
  $verId=ejecutarSQL::consultar("select * from facturas where codigoCliente='$nitC' order by NumPedido desc limit 1");
  while($fila=mysql_fetch_array($verId)){
     $Numpedido=$fila['NumPedido'];
  }
  
  /*Insertando datos en detalle de la venta*/
  for($i = 0;$i< $_SESSION['contador'];$i++){
      consultasSQL::InsertSQL("detalle", "codigoPlatillo, CantidadProductos", " '".$_SESSION['platillo'][$i]."', '1'");

      /*Restando un stock a cada producto seleccionado en el carrito*/
    $prodStock=ejecutarSQL::consultar("select * from platillos where codigoPlatillo='".$_SESSION['platillo'][$i]."'");
    while($fila = mysql_fetch_array($prodStock)) {
        $existencias = $fila['Stock'];
        consultasSQL::UpdateSQL("platillos", "Stock=('$existencias'-1)", "codigoPlatillo='".$_SESSION['platillo'][$i]."'");
    }
  }
    
    /*Vaciando el carrito*/
    unset($_SESSION['platillo']);
    unset($_SESSION['contador']);
    
    echo '<img src="assets/img/ok.png" class="center-all-contens"><br>El pedido se ha realizado con éxito';
  echo '<script>location.href="index.php"</script>';
  }else{
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>No has seleccionado ningún producto, revisa el carrito de compras';
  }

}else{
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>El nombre o contraseña invalidos';
}
 


