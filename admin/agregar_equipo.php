<?php
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}

if(!empty($_POST)) {

	$rama = $_POST['rama'];
	$nombre = $_POST['nombre'];
	$jj = $_POST['jj'];
	$jg = $_POST['jg'];
	$je = $_POST['je'];
	$jp = $_POST['jp'];
	$gf = $_POST['gf'];
	$gc = $_POST['gc'];

	$dif = $gf - $gc;
	$pts = ($jg*3)+($je*1);

	$valid = true;	
	//los juegos jugados coincidan con los jg, jp, je
	$jjugados = $jg + $je + $jp;
	if($jj == $jjugados) {
		
	} else {
		$valid = false;
		$error = "Los juegos jugados deben coincidir con la suma de los juegos ganados, juegos empatados, juegos perdidos";
		header("Location: agregar_equipo.php?error=$error");
	}

	if($rama == null){
		$valid = false;
		$error = "Ingresa alguna rama para el equipo";
		header("Location: agregar_equipo.php?error=$error");
	}

	if ($valid) {
		include 'database.php';
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO ramas(rama, nombre, jj, jg, je, jp, gf, gc, dif, pts) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($rama, $nombre, $jj, $jg, $je, $jp, $gf, $gc, $dif, $pts));
		Database::disconnect();
		$hecho = "Equipo creado satisfactoriamente";
		header("Location: mostrar_equipo.php?hecho=$hecho");
	} else {
		echo "Error al crear equipo";
	}
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu formularios</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/signin.css">
	<link rel="stylesheet" href="css/form.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center"> Agregar Estadistica</h2>
		<hr>
		<?php include('mensajes.php'); ?>
		<form action="agregar_equipo.php" method="post" class="form-signin">

			<label>Selecciona Rama:</label>
			<br>
			<label class="espacio">
  				<input type="radio" name="rama" value="V"> Varonil
			</label>
			<label>
  				<input type="radio" name="rama" value="F"> Femenil
			</label>
			<br>
            <label for="inputNombre" class="">Nombre del equipo:</label>
            <input type="text" name="nombre" id="inputNombre" class="form-control"  required autofocus>

            <label for="inputjj" class="">Juegos Jugados:</label>
            <input type="number" min="0" name="jj" id="inputjj" class="form-control" required>

            <label for="inputjg" class="">Juegos Ganados</label>
            <input type="number" min="0" name="jg" id="inputjg" class="form-control" required>

            <label for="inputje" class="">Juegos Empatados</label>
            <input type="number" min="0" name="je" id="inputje" class="form-control" required>

            <label for="inputjp" class="">Juegos Perdidos</label>
            <input type="number" min="0" name="jp" id="inputjp" class="form-control" required>

            <label for="inputgf" class="">Goles a Favor</label>
            <input type="number" name="gf" id="inputgf" class="form-control" required>

            <label for="inputgc" class="">Goles en Contra</label>
            <input type="number" name="gc" id="inputgc" class="form-control" required>

			<br>
			<a href="mostrar_equipo.php" class="btn btn-danger">Regresar</a>
            <button class="btn  btn-success" type="submit">Agregar Equipo</button>
		</form>
	</div>

	<!--javascript -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="js/bootstrap.js"></script>
</body>
</html>
