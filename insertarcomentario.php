<?php 
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "proyecto";

	$conn = mysqli_connect($host, $user, $pass, $dbname);
?>

<?php 
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$comentario=$_POST['comentario'];
?>

<?php 

	$reqlen = strlen($nombre) * strlen($email) * strlen($comentario);
	if ($reqlen > 0) {
		$insert= "INSERT INTO comentarios (nombre, email, website, comentario) VALUES ('$nombre', '$email', '$website', '$comentario')";
		$query=$conn->query($insert);
		header("Location: index.php");	
	} 
	
?>