<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
	
	<!--<link rel="stylesheet" type="text/css" href="../css/soporte.css">-->

	<?php require '../componentes/links.html'; ?>
</head>
<body>
	<?php require '../componentes/navbar.php'; ?>
	<?php require '../componentes/loginmodal.php' ?>
	<center><h5 class="baloo">Envianos tus dudas o consultas!</h5></center>
	<style>
		.baloo {
	font-family: 'Baloo Tammudu', cursive;
}
	</style>
	<div class="main">
		<div class="info">
		</div>
	<div class="row">
		<div class="col s10 offset-s1">
			<form action="soportephp.php" method="post" name="form" class="form-box">
			<div class="row">
			<div class="input-field col s4 offset-s2">
      			<input type="text" name="name" class="validate">
      			<label for="name">Nombre:</label>
      		</div>
      		<div class="input-field col s4">
      			<input type="email" name="email" class="validate">
      			<label for="email">Correo electronico: </label>
      		</div>
			</div>
			<div class="row">
      		<div class="input-field col s4 offset-s4">
      			<input type="text" name="phone" class="validate">
      			<label for="phone">Numero: (Opcional)</label>
      		</div>
			</div>
			<div class="row">
      		<div class="input-field col s6 offset-s3">
      		<textarea name="msg" id="msg-box" class="materialize-textarea"></textarea>
      		<label for="msg">Su consulta:</label>
      		</div>
			</div>
			<center>
      		<input type="submit" name="submit" class="enviar">
      		<style>
      			.enviar {
      				background-color: #B2EBF2;
      				border-color: none;
      				border-radius: 20px;
      				padding-bottom: 10px;
      				padding-top: 10px;
      				padding-right: 20px;
      				padding-left: 20px; 
      			}
      		</style>
			</center>
			</form>	
		</div>
	</div>
	</div>
	<?php require '../componentes/footer.html' ?>
	<?php require '../componentes/scripts.html' ?>
</body>
</html>