<?php 

$hostname = "localhost";
$user = "root";
$pass = "root";
$dbname = "proyecto";

$conn = mysqli_connect($hostname, $user, $pass, $dbname);

$horario = $_POST['timepicker'];
$porcion = $_POST['porcion'];

$reqlen = strlen($horario) * strlen($porcion);

if ($reqlen > 0) {
	$sql = "INSERT INTO config VALUES ('','','','$horario', '$porcion')";
	$conn->query($sql);	
	echo "Se ha guardado la configuracion satisfactoriamente!";
} else {
	echo "Se ha producido un problema en la configuracion.";
}
?>