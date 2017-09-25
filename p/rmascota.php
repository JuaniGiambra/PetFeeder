<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar Mascota</title>

	<?php require "../componentes/links.html" ?>

	<link rel="stylesheet" href="../css/rmascota.css">
</head>
<body>
	<?php require '../componentes/navbar.php' ?>
	<div class="container">
		<form action="../a/rmascota.php" method="POST">

			<div class="row">

				<!--seleccion hora comidas-->

				<div class="col s4 offset-s1">			
					<label for="timepicker">Seleccione el horario:</label><br>
					<input type="text" class="timepicker" name="timepicker">
				</div>

				<!--tamaño de porcion-->

				<div class="input-field col s4 offset-s2">
					<select name="porcion">
						<option value="" disabled selected>Porcion...</option>
						<option value="1">Peque&ntilde;a</option>
						<option value="2">Mediana</option>
						<option value="3">Grande</option>
					</select>
					<label>Selecciona el tama&ntilde;o de la porcion:</label>
				</div>
			</div>
			<center>
			<input type="submit" class="submit btn" name="submit" value="Guardar datos de mi mascota">
			</center>
		</form>

		<br><br><br>
	</div>
	<?php require '../componentes/footer.html' ?>
	<?php require '../componentes/scripts.html' ?>
	<script>
		$(document).ready(function() {
			$('.timepicker').pickatime({
		default: 'now', // Set default time: 'now', '1:30AM', '16:30'
		fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
		twelvehour: false, // Use AM/PM or 24-hour format
		donetext: 'OK', // text for done-button
		cleartext: 'Clear', // text for clear-button
		canceltext: 'Cancel', // Text for cancel-button
		autoclose: false, // automatic close timepicker
		ampmclickable: true, // make AM PM clickable
		aftershow: function(){} //Function for after opening timepicker
	});
		});

		$('select').material_select();
	</script>
  </body>
  </html>