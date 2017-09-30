<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo">Restaurante de Pedidos Web </span> <small style="color: #fff;">El Salvador</small></h1>
      <p>
          Bienvenido a nuestra tienda en linea, aquí encontrara una gran variedad de platillos exquisitos.
      </p>
    </div>
    <section id="new-prod-index">
         <div class="container">
            <div class="page-header">
                <h1>Novedades <small>productos</small></h1>
            </div>
            <div class="row">
              <?php
                  include 'library/configServer.php';
                  include 'library/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("select * from platillos where Stock > 0 limit 6");
                  $totalproductos = mysql_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysql_fetch_array($consulta)){
                         echo '
                        <div class="col-xs-12 col-sm-6 col-md-4">
                             <div class="thumbnail">
                               <img src="assets/img-products/'.$fila['imagen'].'">
                               <div class="caption">
                                 <h3>'.$fila['tipoPlatillo'].'</h3>
                                 <p>'.$fila['platillo'].'</p>
                                 <p>$'.$fila['precio'].'</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd='.$fila['codigoPlatillo'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="'.$fila['codigoPlatillo'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         ';
                     }   
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  }  
              ?>  
            </div>
         </div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">Pedidos Web  Platillos</span> para recibir las mejores ofertas y descuentos especiales.</p>
                        <p><a href="registration.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="assets/img/carne.jpg" alt="Smart-TV" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section id="distribuidores-index">
        <div class="container">
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12">
                <!-- <div class="page-header">
                  <h1>Nuestras <small style="color: #333;">Marcas</small></h1>
                </div>
                <br><br>
            <img src="assets/img/logos-marcas.png" alt="logos-marcas" class="img-responsive">
          
            </div>
             -->
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>