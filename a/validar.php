<?php 
$user = "root";
$password = "root";
$dbname = "proyecto";

$usuario = $_POST['name'];
$pass = $_POST['pass'];

$conn = mysqli_connect($hostname, $user, $password, $dbname);

$busqueda = "SELECT * from usuarios where usuario='" . $usuario . "'";

if(empty($usuario) | empty($pass)) {
	header("login.php");
	exit();
}

$conn or die("Error al conectar con el servidor, porfavor espere e intente mas tarde." . mysql_error());

$result = $conn ->query($busqueda);

if($row = $result->fetch_assoc()) {
	$pass = md5($pass);
	if($row['password'] == $pass) {
	session_start();
	$_SESSION['username'] = $usuario;
	header("Location: ../index.php");
} else {
	header("Location: login.php");
	exit();
}
}

?>