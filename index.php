<?php 
  require "ADP/conexion.php";
  include "ADP/conexion.php";
 ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>

  <!--links de css-->

  <?php require "componentes/links.html" ?>

  <link rel="stylesheet" href="css/design.css">

</head>
<body>

  <!--barra de navegacion-->

  <?php require "componentes/navbar.php" ?>

  <!--form de login-->

  <?php require "componentes/loginmodal.php" ?>

  <!--contenido de la pagina-->

  <div class="container">

    <!--carousel de imagenes-->

    <?php require "usounico/carousel.php" ?>  

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
  <div class="container"> <br>
    <h5 class="baloo">Comentarios:</h5>
    <center>
      <br><br>
      <form action="ADP/insertarcomentario.php" name="commentform" method="post" class="commentform comentarioss z-depth-2">
        <div class="input-field inp">
          <input type="text" name="nombre"><br>
          <label for="nombre">*Nombre</label>
        </div>

        <div class="input-field inp">
          <input type="text" name="email"><br>
          <label for="email">*Correo Electronico</label>
        </div>


        <div class="input-field inp">
          <input type="text" name="website"><br>
          <label for="website">Website</label>
        </div>
        <div class="input-field inp">
          <textarea name="comentario" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">*Comentario</label></textarea><br>
        </div>
        <input type="submit" name="submit" value="enviar comentario" class="btn">
      </form>
    </center>

    <?php 
    if(isset($_POST['submit'])){

      require("ADP/insertarcomentario.php");

    }
    ?>
    <?php 
    $sql = "SELECT * FROM comentarios";
    $query = $conn->query($sql);
    $row = MYSQLI_NUM_ROWS($query);
    if ($row > 0) {
      while ($linea = mysqli_fetch_array($query)) {
        $nombre = $linea['nombre'];
        $email = $linea['email'];
        $website = $linea['website'];
        $comentario = $linea['comentario'];

        echo "<a href='$website' target='blank_'>$nombre</a>";
        echo "<br>";
        echo "Contacto: " . $email;
        echo "<br>";
        echo "<br>";
        echo $comentario;
        echo "<br><br>";
        echo"<div class='divider'></div>";
      }
    }
    ?>
    
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
            
  </div>
</center>
<?php require "componentes/footer.html" ?>

<?php require "componentes/scripts.html" ?>

</body>
</html>