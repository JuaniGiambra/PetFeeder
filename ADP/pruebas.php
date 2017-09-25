<?php 
  require "conexion.php";
  include "conexion.php";
 ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PetFeeder</title>

  <!--links de css-->

  <link rel="stylesheet" href="style.css">

  <?php require "../componentes/links.html" ?>

</head>
<body>

  <!--barra de navegacion-->

  <?php require "../componentes/navbar.php" ?>

  <!--form de login-->

  <?php require "../componentes/loginmodal.php" ?>

  <!--contenido de la pagina-->

  <div class="container">
  
  <!--carousel de imagenes-->

  <?php require "../usounico/carousel.php" ?>  

  <br><br><br>
  
  <!--primer recuadro-->

  <div class="row">       
    <p class="center-align col s4">
     <i class="large material-icons iconos">flash_on</i><br>
     PetFeeder es un producto el cual no crea gastos excesivos de energia, ya que esta diseñada a base de una plaqueta de arduino la cual se puede alimentar desde un USB o una corriente normal.
   </p>

   <!--segundo recuadro-->

   <p class="center-align col s4">
    <i class="large material-icons iconos">network_wifi</i><br>
    Una de las mayores ventajas de PetFeeder es que no es necesario tener cables hacia computadoras ni tampoco cables de red, todo se maneja por WiFi.
  </p>

  <!--tercer recuadro-->

  <p class="center-align col s4">
    <i class="large material-icons iconos">pets</i><br>
    PetFeeder permite que puedas cuidar a tu mascota sin la necesidad de estar en la casa las 24hs del dia, disfruta de salir sin preocupaciones!
  </p>

  <!--texto de abajo-->

</div>
<br><br><br><br><br>
<div class="row">
<div class="center-align col s8">
<p>Los animales de hoy en dia son vistos en montones de casas por todo el mundo, pero que pasa si los dueños de estas mascotas se van de viaje y no tienen con quien dejar a su perro o gato? Aca entra PetFeeder! El comedero para mascotas que se maneja inalambricamente desde una pagina web diseñada especialmente para este proposito, alimentar a las mascotas.</p>
</div>
<div class="col s4">
<img src="imagenes/imagen1.png" class="materialboxed" data-caption="Icono del PetFeeder" width="150px">
</div>
</div>
</div>
  <div class="divider"></div>
  <center>
  <div class="container">
  <h5>Comentarios:</h5>

  <center>
    <br><br>
  <form action="insertarcomentario.php" name="commentform" method="post" class="commentform">

    <div class="input-field">
    <input type="text" name="nombre"><br>
    <label for="nombre">*Nombre</label>
    </div>

    <div class="input-field">
    <input type="text" name="email"><br>
    <label for="email">*Correo Electronico</label>
    </div>


    <div class="input-field">
    <input type="text" name="website"><br>
    <label for="website">Website</label>
    </div>
    <div class="input-field">
    <textarea name="comentario" id="textarea1" class="materialize-textarea"></textarea>
    <label for="textarea1">*Comentario</label></textarea><br>
    </div>
    <input type="submit" name="submit" value="enviar comentario">
  </form>
</center>

<?php 
  if(isset($_POST['submit'])){
    
    require("insertarcomentario.php");
    
  }
 ?>
<?php 
  echo
  $sql = "SELECT * FROM comentarios";
  $query = $conn->query($sql);
  $row = MYSQLI_NUM_ROWS($query);
  if ($row > 0) {
    while ($linea = mysqli_fetch_array($query)) {
      $nombre = $linea['nombre'];
      $email = $linea['email'];
      $website = $linea['website'];
      $comentario = $linea['comentario'];

      echo "Nombre: <a href='$website' target='blank_'>$nombre</a>";
      echo "<br>";
      echo "Correo electronico: " . $email;
      echo "<br>";
      echo "<br>";
      echo $comentario;
      echo "<br><br>";
      echo"<div class='divider'></div>";
    }
  }
?>
  
  </div>
  </center>
  <?php require "../componentes/footer.html" ?>

  <?php require "../componentes/scripts.html" ?>

</body>
</html>