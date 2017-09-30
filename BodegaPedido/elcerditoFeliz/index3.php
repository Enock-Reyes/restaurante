
<!DOCTYPE html>

  <?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
  ?>
<html>
<title>Restaurante bodeguita </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/pig.jpg" type="image/x-icon">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Restaurante<br>Bodeguita</b></h3>
    <ul class="nav pull-right">    
    </ul>
  </div>
  <div class="w3-bar-block">
    <a href="" class="w3-bar-item w3-button w3-hover-white">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inicio</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Platillos</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Alimentos Gourmet</a>  
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contactenos</a>
     <a href="#Videos" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Videos</a>
     <a href="#comentarios" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Comentarios</a>
    <a href="logout.php"  class="w3-bar-item w3-button w3-hover-white"> Cerrar Cesión </a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Bodeguita el Cerdito</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>
Restaurante Bodeguita</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Platillos.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
    
      <img src="images/carne.jpg" style="width:80%" onclick="onClick(this)" alt="Nada más alemán que un buen plato de carne.">
      <img src="images/carne2.jpg" style="width:80%" onclick="onClick(this)" alt="Asado argentino – La comida argentina más típica y la elección de los más carnívoros.">
      <img src="images/carne-egipto.jpg" style="width:80%" onclick="onClick(this)" alt="Carne típica de Egipto">
    </div>

    <div class="w3-half">
      <img src="images/carne4.jpg" style="width:70%" onclick="onClick(this)" alt="La Vicenta">
      <img src="images/carne5.jpg" style="width:72%" onclick="onClick(this)" alt="Carne asada, estilo Chihuahua">
      <img src="images/pollo.jpg" style="width:55% " onclick="onClick(this)" alt="pollo">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Alimentos Gourmet.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Que es?</p>
    <p>Los alimentos gourmet son aquellas preparaciones que han sido elaborados con ingredientes exquisitamente seleccionados, con exhaustivos cuidados de higiene y de las propiedades organolépticas; además han sido elaborados por personas que, después de muchos años de experiencia y una clara pasión por la alta cocina, están preparados para ofrecer un producto que pueda ser consumido por alguien que realmente aprecie su calidad y delicadeza.
    </p>
  </div>
  
  <!-- Contactenos -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contáctanos.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Tiene alguna duda sobre nuestros platillos no dude en inviarnos su sugerencia en el formulario de abajo.</p>
    <form  class="contact" name="contact-form" method="post" action="enviar2.php" target="_blank">
      <div class="w3-section">
        <label>Nombre</label>
        <input class="w3-input w3-border" type="text" name="nombre" required="required" placeholder="Tu nombre" >
      </div>
      <div class="w3-section">
        <label>Correo Electronico</label>
        <input class="w3-input w3-border" type="email" name="email" required="required" placeholder="Tu correo">
      </div>
      <div class="w3-section">
        <label>Sugerencia/Duda</label>
        <textarea rows="4" cols="50" class="w3-input w3-border"  type="text-area" name="mensaje" required="required" placeholder="Sugerencia/Duda"></textarea>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Envia un mensaje</button>
      <!-- Videos -->
    </form> 
    <div class="w3-container" id="Videos" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Videos.</b></h1>
    <video width="320" height="240" controls>
  <source src="images/movie.mp4" type="video/mp4">
  <source src="images/movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
 <video width="420" height="240" controls>
  <source src="images/movie1.mp4" type="video/mp4">
  <source src="images/movie1.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<video width="320" height="240" controls>
  <source src="#" type="video/mp4">
  <source src="#" type="video/ogg">
  Your browser does not support the video tag.
</video>
</div>
<!-- Comentarios --> 
 <div class="w3-container" id="comentarios" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Comentarios.</b></h1>
<FORM  ACTION="procesar_mensaje.php"  METHOD=POST>
<B>Nombre de usuario:</B>
<INPUT class="w3-input w3-border" required="required" TYPE=text SIZE=20 NAME="usuario" value="<?php echo $_SESSION['user'];?>" >
<BR>
<B>Escribe tu mensaje:</B>
<BR>
<TEXTAREA rows="4" cols="50" required="required" class="w3-input w3-border" NAME="mensaje"></TEXTAREA>
<BR>
<INPUT TYPE=submit class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" VALUE="Comenta">
</FORM>

<HR >

<?PHP

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("elcerditofeliz", $conexion);

if ($conexion)
{
  $resultado = mysql_query("SELECT  idComentarios, usuario, fecha, mensaje FROM comentarios ORDER BY idComentarios DESC limit 8", $conexion);
  while ($fila = mysql_fetch_row($resultado))
  {
    echo "<B>Mensaje</B> #" . $fila[0] . "; ";
    echo "<B>Escrito por:</B> " . $fila[1] . "; ";
    echo "<B>Fecha:</B> " . $fila[2] . "; ";
    echo "<BR>"; 
    echo $fila[3];
    echo "<HR>";
  }
}


mysql_close($conexion);

?>


  </div>

<!-- End page content -->
</div>
</div>
<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">&copy; Copyright <a href="#" title="W3.CSS" target="_blank" class="w3-hover-opacity">Bodeguita el Cerdito</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>
