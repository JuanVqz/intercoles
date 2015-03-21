<?php
if(empty($_POST['nombre'])) {
	$error = "Ingresa algun nombre correcto";
	header("Location: index.php?error=$error");
}
if(empty($_POST['password'])) {
	$error = "Ingresa alguna contraseña correcta";
	header("Location: index.php?error=$error");
}

$nombre = $_POST['nombre'];
$password = $_POST['password'];

include 'database.php';
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = " SELECT * FROM admin WHERE nombre = ? ";

$q = $pdo->prepare($sql);
	$q->execute(array($nombre));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	
	if($data['nombre'] == $nombre) {
		if( crypt($password, $data['password']) == $data['password'] ) {
			session_start();
			$_SESSION['auth'] = "SI";
			$_SESSION['usuario'] = $data['nombre'];
			header("Location: home.php");
		} else {
			$error = "Contraseña incorrecta";
			header("Location: index.php?error=$error ");
		}
	} else {
		$error = "Nombre incorrecto";
		header("Location: index.php?error=$error ");
	}

	Database::disconnect();
?>




