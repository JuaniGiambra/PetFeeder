<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

	<link rel="stylesheet" href="../css/dlogin.css">
	<?php require "../componentes/links.html" ?>
	
</head>
<body>

	<?php require "../componentes/navbar.php" ?>

	<div class="container">
		<center>
			<div class="login">
				<form action="../a/validar.php" method="post">
					<div class="input-field">
						<input type="text" name="name" class="validate">
      					<label for="name">Usuario:</label>
					</div>
					<div class="input-field">
						<input type="password" name="pass" class="validate">
      					<label for="pass">Contrase&ntilde;a</label>
					</div>

					<input type="submit" class="submit" name="submit">
				</form>
			</div>
		</center>
	</div>

	<?php require "../componentes/footer.html" ?>
	<?php require "../componentes/scripts.html" ?>
	<!--activadores-->

	<script>
		$( document ).ready(function(){

			//sidenav

			$(".button-collapse").sideNav();

			//parallax

			$('.parallax').parallax();
		});
	</script>	

	<script>
		$('input[type="password"]').on('focus', () => {
			$('*').addClass('password');
		}).on('focusout', () => {
			$('*').removeClass('password');
		});;
	</script>
</body>
</html>