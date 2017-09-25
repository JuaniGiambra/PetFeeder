<?php 
	if(isset($_POST['submit'])) {
		$nombre=$_POST['name'];
		$correo=$_POST['email'];
		$numero=$_POST['phone'];
		$texto=$_POST['msg'];

		$to='GiambraJuan@gmail.com';
		$subject='Soporte PetFeeder';
		$message="Nombre: ".$nombre."\n"."Numero: ".$numero."\n"."Necesita ayuda con lo siguiente: "."\n\n".$texto;
		$headers="De: ".$correo;
	}

	if(mail($to, $subject, $message, $headers)){
		echo "<h1>Tu mensaje se a enviado correctamente! gracias"." ".$nombre.", te vamos a responer los mas rapido posible!</h1>";
	} else {
		echo "Algo esta mal...";
	}
?>