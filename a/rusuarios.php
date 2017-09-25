<?php 
$hostname = "localhost";
$user = "root";
$password = "root";
$dbname = "proyecto";

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$apellido = $_POST['apellido'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$reqlen = strlen($mail) * strlen($usuario) * strlen($pass) * strlen($rpass) * strlen($nombre) * strlen($apellido);

$conn = mysqli_connect($hostname, $user, $password, $dbname);

if($reqlen > 0){
	if ($pass === $rpass) {
		$pass = md5($pass);
		$sql = ("INSERT INTO registros VALUES('','$usuario','$mail','$nombre','$apellido','$pass')");
		$conn->query($sql);
		$conn->close();
		echo '<div class="texto">Su registro se a creado correctamente</div>';
	}
	else {
		echo '<div class="texto">Por favor, introduzca dos contrase&ntilde;as identicas.</div>';
	}
}
else {
	echo '<div class="texto">Por favor, rellene todos los campos para continuar</div>';
}
?>