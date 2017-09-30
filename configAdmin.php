<?php
    include './library/configServer.php';
    include './library/consulSQL.php';
    include './process/securityPanel.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Admin</title>
    <?php include './inc/link.php'; ?>
    <script type="text/javascript" src="js/admin.js"></script>
</head>
<body id="container-page-configAdmin">
  
    <section id="prove-product-cat-config">
        <div class="container">
          <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Restaurante De Pedidos Web</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="" class="">Bienvenido <strong><?php echo $_SESSION['admin'];?></strong> </a></li>
      <li class="active"><a href="configAdmin.php">Inicio</a></li>
     
      <li><a href="process/logout.php" class="btn btn-info" role="button">Cerra cesión</a></li>
    </ul>
  </div>
</nav>
          <div class="container">
  
</div>
            <div class="page-header">
              <h1>Panel de administración <small class="tittles-pages-logo">Restaurante de Pedidos web</small></h1>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#Productos" role="tab" data-toggle="tab">Productos</a></li>
              <li role="presentation"><a href="#Proveedores" role="tab" data-toggle="tab">Proveedores</a></li>
              <li role="presentation"><a href="#Categorias" role="tab" data-toggle="tab">Categorías</a></li>
              <li role="presentation"><a href="#Admins" role="tab" data-toggle="tab">Admin</a></li>
              <li role="presentation"><a href="#Pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
            </ul>
            <div class="tab-content">
                <!--==============================Panel productos===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Productos">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="add-product">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                            <form role="form" action="process/regproduct.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <input type="hidden" class="form-control"  placeholder="Código" maxlength="30" name="prod-codigo">
                              </div>
                              <div class="form-group">
                                <label>Nombre de producto</label>
                                <input type="text" class="form-control"  placeholder="Nombre" required maxlength="30" name="prod-name">
                              </div>
                              <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="prod-categoria">
                                    <?php 
                                        $categoriac=  ejecutarSQL::consultar("select * from categoria");
                                        while($catec=mysql_fetch_array($categoriac)){
                                            echo '<option value="'.$catec['CodigoCat'].'">'.$catec['Nombre'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control"  placeholder="Precio" required maxlength="20"  name="prod-price">
                              </div>
                              <div class="form-group">
                                <label>Tipo de platillo</label>
                                <input type="text" class="form-control"  placeholder="Tipo de platillo" required maxlength="30" name="prod-platillo">
                              </div>
                              <div class="form-group">
                                <label>Descripcion</label>
                                <input type="text" class="form-control"  placeholder="descripcion" required maxlength="100" name="prod-descripcion">
                              </div>
                              <div class="form-group">
                                <label>Unidades disponibles</label>
                                <input type="text" class="form-control"  placeholder="Unidades" required maxlength="100"  name="prod-stock">
                              </div>
                              <div class="form-group">
                                <label>Proveedor</label>
                                <select class="form-control" name="prod-codigoP">
                                    <?php 
                                        $proveedoresc=  ejecutarSQL::consultar("select * from proveedores");
                                        while($provc=mysql_fetch_array($proveedoresc)){
                                            echo '<option value="'.$provc['codigoProveedor'].'">'.$provc['razonSocial'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Imagen de producto</label>
                                <input type="file" name="img">
                                <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                              </div>
                                <input type="hidden"  name="admin-name" value="<?php echo $_SESSION['nombreAdmin'] ?>">
                              <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p>
                              <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un producto</h2>
                             <form action="process/delprod.php" method="post" role="form">
                                 <div class="form-group">
                                     <label>Productos</label>
                                     <select class="form-control" name="prod-code">
                                         <?php 
                                             $productoc=  ejecutarSQL::consultar("select * from platillos");
                                             while($prodc=mysql_fetch_array($productoc)){
                                                 echo '<option value="'.$prodc['codigoPlatillo'].'">'.$prodc['tipoPlatillo'].'-'.$prodc['platillo'].'-'.$prodc['Nombre'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>
                         </div>
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de producto</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th></th>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Categoria</th>
                                          <th class="text-center">Precio</th>
                                          <th class="text-center">Tipo Platillo</th>
                                          <th class="text-center">Descripcion</th>
                                          <th class="text-center">Unidades</th>
                                          <th class="text-center">Proveedor</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $productos=  ejecutarSQL::consultar("select * from platillos");
                                        $upr=1;
                                        while($prod=mysql_fetch_array($productos)){
                                            echo '
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-'.$upr.'">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="'.$prod['codigoPlatillo'].'">
                                                         
                                                        </td>
                                                        <td><input class="form-control" type="text" name="platillo" maxlength="30" required="" value="'.$prod['platillo'].'"></td>
                                                        <td>';
                                                            $categoriac3=  ejecutarSQL::consultar("select * from categoria where CodigoCat='".$prod['CodigoCat']."'");
                                                            while($catec3=mysql_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['CodigoCat'];
                                                                $nameCat=$catec3['Nombre'];
                                                            }
                                                      echo '<select class="form-control" name="categoria">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from categoria");
                                                                while($catec2=mysql_fetch_array($categoriac2)){
                                                                    if($catec2['CodigoCat']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['CodigoCat'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="precio" required="" value="'.$prod['precio'].'"></td>
                                                        <td><input class="form-control" type="tel" name="platilloT" required="" maxlength="20" value="'.$prod['tipoPlatillo'].'"></td>
                                                        <td><input class="form-control" type="text-area" name="descripcion" maxlength="30" required="" value="'.$prod['descripcion'].'"></td>
                                                        <td><input class="form-control" type="text-area" name="stock" maxlength="30" required="" value="'.$prod['Stock'].'"></td>
                                                        <td>';
                                                           $proveedoresc3=  ejecutarSQL::consultar("select * from proveedores where codigoProveedor='".$prod['codigoProveedor']."'");
                                                           while($provc3=mysql_fetch_array($proveedoresc3)){
                                                                    $nombreP=$provc3['razonSocial'];
                                                                    $nitP=$provc3['codigoProveedor'];
                                                            }
                                                       echo '<select class="form-control" name="proveedor">';
                                                                echo '<option value="'.$nitP.'">'.$nombreP.'</option>';
                                                                $proveedoresc2=  ejecutarSQL::consultar("select * from proveedores");
                                                                while($provc2=mysql_fetch_array($proveedoresc2)){
                                                                    if($provc2['codigoProveedor']==$nitP){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$provc2['codigoProveedor'].'">'.$provc2['razonSocial'].'</option>';
                                                                    }  
                                                                }  
                                                       echo '</select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                ';
                                            $upr=$upr+1;
                                        }
                                      ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--==============================Panel Proveedores===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Proveedores">
                    <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="add-provee">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un proveedor</h2>
                            <form action="process/regprove.php" method="post" role="form">
                              <div class="form-group">
                                <input type="hidden" class="form-control"  placeholder="codigo" maxlength="30" name="codigoP">
                              </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombre proveedor" maxlength="30" required="">
                                </div>
                                <div class="form-group">
                                    <label>Razon Social</label>
                                    <input class="form-control" type="text" name="razon" placeholder="Nombre proveedor" maxlength="30" required="">
                                </div>
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input class="form-control" type="text" name="direccion" placeholder="Dirección proveedor" required="">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" type="tel" name="telefono" placeholder="Número telefónico" pattern="[0-9]{1,20}" maxlength="20" required="">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email" placeholder="E-mail" required="">
                                </div>
                                <div class="form-group">
                                    <label>RFC</label>
                                    <input class="form-control" type="text" name="rfc" placeholder="RUC" required="">
                                </div>
                                 <div class="form-group">
                                     <label>Marcas</label>
                                     <select class="form-control" name="marca">
                                         <?php 
                                             $marcaP=  ejecutarSQL::consultar("select * from marcas");
                                             while($marcP=mysql_fetch_array($marcaP)){
                                                 echo '<option value="'.$marcP['codigoMarca'].'">'.$marcP['marca'].'-'.$marcP['descripcion'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                <p class="text-center"><button type="submit" class="btn btn-primary">Añadir proveedor</button></p>
                                <br>
                                <div id="res-form-add-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="del-prove">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un proveedor</h2>
                            <form action="process/delprove.php" method="post" role="form">
                                <div class="form-group">
                                    <label>Proveedores</label>
                                    <select class="form-control" name="proveedor">
                                        <?php 
                                            $proveedorC=  ejecutarSQL::consultar("select * from proveedores");
                                            while($PC=mysql_fetch_array($proveedorC)){
                                                echo '<option value="'.$PC['codigoProveedor'].'">'.$PC['codigoProveedor'].' - '.$PC['razonSocial'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar proveedor</button></p>
                                <br>
                                <div id="res-form-del-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>    
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de proveedor</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          
                                          <th class="text-center"></th>
                                            <th class="text-center">Nombre</th>
                                          <th class="text-center">Razon Social</th>
                                          <th class="text-center">Direccion</th>
                                          <th class="text-center">Telefono</th>
                                           <th class="text-center">Email</th>
                                            <th class="text-center">RFC</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php

                                              $proveedores=  ejecutarSQL::consultar("select * from proveedores");
                                              $up=1;
                                              while($prov=mysql_fetch_array($proveedores)){
                                                  echo '
                                                      <div id="update-proveedor">
                                                        <form method="post" action="process/updateProveedor.php" id="res-update-prove-'.$up.'">
                                                          <tr>
                                                            <td>
                                                          <input class="form-control" type="hidden" name="codigoP" required="" value="'.$prov['codigoProveedor'].'">
                                                         
                                                        </td>
                                                              <td><input class="form-control" type="text" name="nombre" maxlength="30" required="" value="'.$prov['nombre'].'"></td>
                                                              <td><input class="form-control" type="text" name="razon" maxlength="30" required="" value="'.$prov['razonSocial'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="direccion" required="" value="'.$prov['direccion'].'"></td>
                                                              <td><input class="form-control" type="tel" name="telefono" required="" maxlength="20" value="'.$prov['telefono'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="email" maxlength="30" required="" value="'.$prov['email'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="rfc" maxlength="30" required="" value="'.$prov['rfc'].'"></td>
                                                               <td>';
                                                            $categoriac3=  ejecutarSQL::consultar("select * from marcas where codigoMarca='".$prov['codigoMarca']."'");
                                                            while($catec3=mysql_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['codigoMarca'];
                                                                $nameCat=$catec3['marca'];
                                                            }
                                                      echo '<select class="form-control" name="marca">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from marcas");
                                                                while($catec2=mysql_fetch_array($categoriac2)){
                                                                    if($catec2['codigoMarca']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['codigoMarca'].'">'.$catec2['marca'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>
                                                        </td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-'.$up.'">Actualizar</button>
                                                                  <div id="res-update-prove-'.$up.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                                                  $up=$up+1;
                                              }
                                            ?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--==============================Panel Categorias===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Categorias">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-categori">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar categoría</h2>
                                <form action="process/regcategori.php" method="post" role="form">
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="categ-code" placeholder="Código de categoria" maxlength="9" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="categ-name" placeholder="Nombre de categoria" maxlength="30" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <input class="form-control" type="text" name="categ-descrip" placeholder="Descripcióne de categoria" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar categoría</button></p>
                                    <br>
                                    <div id="res-form-add-categori" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-categori">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar una categoría</h2>
                                <form action="process/delcategori.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Categorías</label>
                                        <select class="form-control" name="categ-code">
                                            <?php 
                                                $categoriav=  ejecutarSQL::consultar("select * from categoria");
                                                while($categv=mysql_fetch_array($categoriav)){
                                                    echo '<option value="'.$categv['CodigoCat'].'">'.$categv['CodigoCat'].' - '.$categv['Nombre'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar categoría</button></p>
                                    <br>
                                    <div id="res-form-del-cat" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar categoría</h3></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th></th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $categorias=  ejecutarSQL::consultar("select * from categoria");
                                              $ui=1;
                                              while($cate=mysql_fetch_array($categorias)){
                                                  echo '
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateCategory.php" id="res-update-category-'.$ui.'">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="'.$cate['CodigoCat'].'">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="'.$cate['Nombre'].'"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="'.$cate['Descripcion'].'"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-'.$ui.'">Actualizar</button>
                                                                  <div id="res-update-category-'.$ui.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                                                  $ui=$ui+1;
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!--==============================Panel Admins===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Admins">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-admin">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar administrador</h2>
                                <form action="process/regAdmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="admin-name" placeholder="Nombre" maxlength="9" pattern="[a-zA-Z]{4,9}" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input class="form-control" type="password" name="admin-pass" placeholder="Contraseña" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar administrador</button></p>
                                    <br>
                                    <div id="res-form-add-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-admin">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar administrador</h2>
                                <form action="process/deladmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Administradores</label>
                                        <select class="form-control" name="name-admin">
                                            <?php 
                                                $adminCon=  ejecutarSQL::consultar("select * from administrador");
                                                while($AdminD=mysql_fetch_array($adminCon)){
                                                    echo '<option value="'.$AdminD['Nombre'].'">'.$AdminD['Nombre'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar administrador</button></p>
                                    <br>
                                    <div id="res-form-del-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12"></div>
                    </div>
                </div>
                <!--==============================Panel pedidos===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Pedidos">
                    <div class="row">
                        <div class="col-xs-12">
                            <br><br>
                            <div id="del-pedido">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar pedido</h2>
                                <form action="process/delPedido.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Pedidos</label>
                                        <select class="form-control" name="num-pedido">
                                            <?php 
                                                $pedidoC=  ejecutarSQL::consultar("select * from facturas");
                                                while($pedidoD=mysql_fetch_array($pedidoC)){
                                                    echo '<option value="'.$pedidoD['NumPedido'].'">Pedido #'.$pedidoD['NumPedido'].' - Estado('.$pedidoD['Estado'].') - Fecha('.$pedidoD['Fecha'].')</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar pedido</button></p>
                                    <br>
                                    <div id="res-form-del-pedido" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                            <br><br>
                             <div class="panel panel-info">
                               <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar estado de pedido</h3></div>
                              <div class="table-responsive">
                                  <table class="table table-bordered">
                                      <thead class="">
                                          <tr>
                                              <th class="text-center">#</th>
                                              <th class="text-center">Fecha</th>
                                              <th class="text-center">Cliente</th>
                                              <th class="text-center">Descuento</th>
                                              <th class="text-center">Total</th>
                                              <th class="text-center">Estado</th>
                                              <th class="text-center">Opciones</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $pedidoU=  ejecutarSQL::consultar("select * from facturas");
                                            $upp=1;
                                            while($peU=mysql_fetch_array($pedidoU)){
                                                echo '
                                                    <div id="update-pedido">
                                                      <form method="post" action="process/updatePedido.php" id="res-update-pedido-'.$upp.'">
                                                        <tr>
                                                            <td>'.$peU['NumPedido'].'<input type="hidden" name="num-pedido" value="'.$peU['NumPedido'].'"></td>
                                                            <td>'.$peU['Fecha'].'</td>
                                                            <td>';
                                                                $conUs= ejecutarSQL::consultar("select * from clientes where codigoCliente='".$peU['codigoCliente']."'");
                                                                while($UsP=mysql_fetch_array($conUs)){
                                                                    echo $UsP['nombre'];
                                                                }
                                                    echo   '</td>
                                                            <td>'.$peU['Descuento'].'%</td>
                                                            <td>'.$peU['totalPagar'].'</td>
                                                            <td>
                                                                <select class="form-control" name="pedido-status">';
                                                                    if($peU['Estado']=="Pendiente"){
                                                                       echo '<option value="Pendiente">Pendiente</option>'; 
                                                                       echo '<option value="Entregado">Entregado</option>'; 
                                                                    }
                                                                    if($peU['Estado']=="Entregado"){
                                                                       echo '<option value="Entregado">Entregado</option>';
                                                                       echo '<option value="Pendiente">Pendiente</option>'; 
                                                                    }
                                                    echo        '</select>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="submit" class="btn btn-sm btn-primary button-UPPE" value="res-update-pedido-'.$upp.'">Actualizar</button>
                                                                <div id="res-update-pedido-'.$upp.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                            </td>
                                                        </tr>
                                                      </form>
                                                    </div>
                                                    ';
                                                $upp=$upp+1;
                                            }
                                          ?>
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>