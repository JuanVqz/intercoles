<?php
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}
	require 'database.php';
	$id = 0;

	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}

	if ( !empty($_POST)) {
		$id = $_POST['id'];

		// borrar equipo
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM ramas WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Database::disconnect();
		header("Location: mostrar_equipo.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link   href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<h3>Borrar Equipo</h3>
			<hr>
			<form class="form-signin" role="form" action="borrar_equipo.php" method="post">
			  	<input type="hidden" name="id" value="<?php echo $id;?>"/>
			  	<p class="alert alert-danger">Estas seguro de borrar el equipo?</p>
			  	<div class="form-actions">
					<button type="submit" class="btn btn-danger">Si</button>
					<a class="btn btn-primary" href="mostrar_equipo.php">No</a>
				</div>
			</form>
		</div>
	</div> <!-- /container -->

</body>
</html>
