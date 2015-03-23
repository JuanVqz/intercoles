<?php
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}
if(!empty($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu formularios</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2> Bienvenido, <?php echo $usuario;?>.</h2>
		<a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesion</a>
		<hr>
		<h1>Estadisticas:</h1>
			<ul>
				<li>
					<a href="mostrar_equipo.php"><h2>Ver equipos</h2></a>
				</li>
			</ul>
		<h1>Videos:</h1>
			<ul>
				<li>
					<a href="#"><h2>Agregar video </h2></a>
				</li>
			</ul>
		<h1>Galeria:</h1>
			<ul>
				<li>
					<a href="#"><h2>Agregar foto</h2></a><small>(recuerda la foto es formato JPG )</small>
				</li>
			</ul>
	</div>

	<!--javascript -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="js/bootstrap.js"></script>
</body>
</html>
