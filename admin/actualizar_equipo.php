<?php 
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}	
	require 'database.php';

	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if (!empty($_POST)) {
		
		$id = $_POST['id_txt'];
		$rama = $_POST['rama_txt'];

		$nombre = $_POST['nombre'];
		$jj     = $_POST['jj'];
		$jg     = $_POST['jg'];
		$je     = $_POST['je'];
		$jp     = $_POST['jp'];
		$gf     = $_POST['gf'];
		$gc     = $_POST['gc'];
		$dif    = 0;
		$pts    = 0;

		$dif = $gf - $gc;
		$pts = ($jg*3)+($je*1);
		
		$valid = true;	
		$jjugados = $jg + $je + $jp;
		if($jj == $jjugados) {
			
		} else {
			$valid = false;
			$error = "Los juegos jugados deben coincidir con la suma de los juegos ganados, juegos empatados, juegos perdidos";
			header("Location: actualizar_equipo.php?error=$error");
		}

		if ($valid) {
			//echo $nombre." ".$rama." ".$jj." ".$jg." ".$je." ".$jp." ".$gf." ".$gc." ".$dif." ".$pts;
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = " UPDATE ramas set nombre = ?,rama = ?,jj = ?,jg = ?,je = ?,jp = ?,gf = ?,gc = ?,dif = ?,pts = ? WHERE id = ? ";
			$q = $pdo->prepare($sql);
			$q->execute(array($nombre,$rama,$jj,$jg,$je,$jp,$gf,$gc,$dif,$pts,$id));
			Database::disconnect();
			$hecho = "Actualizado Correctamente";
			header("Location: mostrar_equipo.php?hecho=$hecho");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM ramas where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		
		$rama   = $data['rama'];
		$nombre = $data['nombre'];
		$jj     = $data['jj'];
		$jg     = $data['jg'];
		$je     = $data['je'];
		$jp     = $data['jp'];
		$gf     = $data['gf'];
		$gc     = $data['gc'];
		$dif    = $data['dif'];
		$pts    = $data['pts'];

		Database::disconnect();
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
		<h2 class="text-center"> Actualizar Estadistica</h2>
		<hr>
		<?php include('mensajes.php'); ?>
		<form action="actualizar_equipo.php" method="post" class="form-signin">
				
			<input type="hidden" name="id_txt" value="<?php echo $id;?>"/>
			<input type="hidden" name="rama_txt" value="<?php echo $rama; ?>"/>
			
            <label for="inputNombre" class="">Nombre del equipo:</label>
            <input type="text" name="nombre" id="inputNombre" class="form-control" value="<?php echo !empty($nombre)?$nombre:''; ?>" required autofocus>

            <label for="inputjj" class="">Juegos Jugados:</label>
            <input type="number" min="0" name="jj" id="inputjj" class="form-control" value="<?php echo !empty($jj)?$jj:''; ?>" required>

            <label for="inputjg" class="">Juegos Ganados</label>
            <input type="number" min="0" name="jg" id="inputjg" class="form-control" value="<?php echo !empty($jg)?$jg:''; ?>" required>

            <label for="inputje" class="">Juegos Empatados</label>
            <input type="number" min="0" name="je" id="inputje" class="form-control" value="<?php echo !empty($je)?$je:''; ?>" required>

            <label for="inputjp" class="">Juegos Perdidos</label>
            <input type="number" min="0" name="jp" id="inputjp" class="form-control" value="<?php echo !empty($jp)?$jp:''; ?>" required>

            <label for="inputgf" class="">Goles a Favor</label>
            <input type="number" name="gf" id="inputgf" class="form-control" value="<?php echo !empty($gf)?$gf:''; ?>" required>

            <label for="inputgc" class="">Goles en Contra</label>
            <input type="number" name="gc" id="inputgc" class="form-control" value="<?php echo !empty($gc)?$gc:''; ?>" required>

			<br>
			<a href="mostrar_equipo.php" class="btn btn-lg btn-danger">Regresar</a>
            <button class="btn btn-lg btn-success" type="submit">Agregar Equipo</button>
		</form>
	</div>

	<!--javascript -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="js/bootstrap.js"></script>
</body>
</html>
