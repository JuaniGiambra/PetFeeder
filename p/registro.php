<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>

	<?php require "../componentes/links.html" ?>

	<link rel="stylesheet" href="../css/registro.css">

</head>
<body>
	<?php require "../componentes/navbar.php" ?>

	<div class="container">
		<center>
			<br>
			<h5 class="baloo">Registrate para empezar a disfrutar de tu PetFeeder!</h5>
			<div class="row">
			<form action="../a/rusuarios.php" method="POST" class="z-depth-2 formulario col s8 offset-s2">
				<div class="input-field col s6">
					<input type="text" name="usuario" class="validate">
					<label for="usuario">Ingrese nombre de usuario:</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="nombre" class="validate">
					<label for="nombre">Ingrese su nombre:</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="apellido" class="validate">
					<label for="apellido">Ingrese su/s apellido/s</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="mail" class="validate">
					<label for="mail">Ingrese su correo electronico:</label>
				</div>
				<div class="input-field col s6">
					<input type="password" name="pass" class="validate">
					<label for="pass">Ingrese su contrase&ntilde;a:</label>
				</div>
				<div class="input-field margen col s6">
					<input type="password" name="rpass" class="validate">
					<label for="npass">Repita su contrase&ntilde;a:</label>
				</div>
				<input type="submit" name="submit" class="boton z-depth-2" value="Registrarse"><br><br>
				<a href="login.php" class="z-depth-2 boton iniciar baloo">Login</a>
			</form>
			</div>
		</center>
	</div>
	<?php require "../componentes/footer.html" ?>
	<?php require "../componentes/scripts.html" ?>
</body>
</html>