<h2>Crear Admin</h2>
<?php
include('database.php');
	$nombre = "sistemas";
	$password = crypt("1234");

	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO admin(nombre, password) values (?, ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($nombre, $password));
	Database::disconnect();
	echo "Usuario creado satisfactoriamente";
?>
