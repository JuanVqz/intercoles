<?php
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu formularios</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h3>Estadisticas</h3>
		<a href="home.php" class="btn btn-danger">Regresar</a>
		<hr>
		<a href="agregar_equipo.php" class="btn btn-success">Agregar equipo</a>
		<br>
		<h3>Rama varonil</h3>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<td align="center"><strong>Equipo</strong></td>
					<td align="center"><strong>JJ</strong></td>
					<td align="center"><strong>JG</strong></td>
					<td align="center"><strong>JE</strong></td>
					<td align="center"><strong>JP</strong></td>
					<td align="center"><strong>GF</strong></td>
					<td align="center"><strong>GC</strong></td>
					<td align="center"><strong>Dif</strong></td>
					<td align="center"><strong>Pts.</strong></td>
					<td align="center"><strong>Acciones</strong></td>
				</tr>
			</thead>
			<tbody>
				<?php
					include("database.php");
					$pdo = Database::connect();
					$sql = " SELECT * FROM ramas ORDER BY pts DESC ";
					$num = 0;
					foreach($pdo->query($sql) as $row) {
						
						if ($row['rama'] === 'V') {
							echo "<tr>";
								if($row['id']) {
									$num = $num +1;
									echo "<td align='center'>".$num."</td>";
								}

								echo "<td align='center'>".$row['nombre']."</td>";
								echo "<td align='center'>".$row['jj']."</td>";
								echo "<td align='center'>".$row['jg']."</td>";
								echo "<td align='center'>".$row['je']."</td>";
								echo "<td align='center'>".$row['jp']."</td>";
								echo "<td align='center'>".$row['gf']."</td>";
								echo "<td align='center'>".$row['gc']."</td>";
								echo "<td align='center'>".$row['dif']."</td>";
								echo "<td align='center'>".$row['pts']."</td>";
								echo '<td align="center" width=200>';
							   		echo '<a class="btn btn-warning" href="actualizar_equipo.php?id='.$row['id'].'">Actualizar</a>';
							   		echo '&nbsp;';
							   		echo '<a class="btn btn-danger" href="borrar_equipo.php?id='.$row['id'].'">Borrar</a>';
							   	echo '</td>';

							echo "</tr>";

						}
					}
				?>
			</tbody>
		</table>

		<h3>Rama femenil</h3>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<td align="center"><strong>Equipo</strong></td>
					<td align="center"><strong>JJ</strong></td>
					<td align="center"><strong>JG</strong></td>
					<td align="center"><strong>JE</strong></td>
					<td align="center"><strong>JP</strong></td>
					<td align="center"><strong>GF</strong></td>
					<td align="center"><strong>GC</strong></td>
					<td align="center"><strong>Dif</strong></td>
					<td align="center"><strong>Pts.</strong></td>
					<td align="center"><strong>Acciones</strong></td>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($pdo->query($sql) as $row) {
						if ($row['rama'] === 'F') {
							echo "<tr>";
								echo "<td align='center'>1</td>";			
								echo "<td align='center'>".$row['nombre']."</td>";
								echo "<td align='center'>".$row['jj']."</td>";
								echo "<td align='center'>".$row['jg']."</td>";
								echo "<td align='center'>".$row['je']."</td>";
								echo "<td align='center'>".$row['jp']."</td>";
								echo "<td align='center'>".$row['gf']."</td>";
								echo "<td align='center'>".$row['gc']."</td>";
								echo "<td align='center'>".$row['dif']."</td>";
								echo "<td align='center'>".$row['pts']."</td>";
								echo '<td align="center" width=200>';
							   		echo '<a class="btn btn-warning" href="update.php?id='.$row['id'].'">Actualizar</a>';
							   		echo '&nbsp;';
							   		echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Borrar</a>';
							   	echo '</td>';

							echo "</tr>";

						}
					}
				?>
			</tbody>
		</table>
	</div>
	<!--javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="./js/bootstrap.js"></script>
</body>
</html>
