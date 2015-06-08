<?php
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}
?>
<?php include('cabeza.php');?>
<div class="container">
	<h3>Estadisticas</h3>
	<a href="home.php" class="btn btn-danger">Regresar</a>
	<hr>
	<?php include('mensajes.php'); ?>

	<a href="agregar_equipo.php" class="btn btn-success">Agregar equipo</a>

	<h3>Tabla general rama varonil</h3>
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
			$sql = " SELECT * FROM ramas ORDER BY pts DESC, dif DESC ";
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

	<div class="col col-md-6">
		<h3>Grupo 1 Varonil</h3>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<td align="center"><strong>Equipo</strong></td>
					<td align="center"><strong>Pts.</strong></td>
				</tr>
			</thead>
			<tbody>
				<?php
				$num = 0;
				foreach($pdo->query($sql) as $row) {

					if ($row['rama'] === 'V') {
						if($row['grupo'] === '1') {
							echo "<tr>";
							if($row['id']) {
								$num = $num +1;
								echo "<td align='center'>".$num."</td>";
							}
							echo "<td align='center'>".$row['nombre']."</td>";
							echo "<td align='center'>".$row['pts']."</td>";
							echo '</td>';
							echo "</tr>";
						}
					}
				}
				?>
			</tbody>
		</table>
	</div>

	<div class="col col-md-6">
		<h3>Grupo 2 Varonil</h3>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<td align="center"><strong>Equipo</strong></td>
					<td align="center"><strong>Pts.</strong></td>
				</tr>
			</thead>
			<tbody>
				<?php
				$num = 0;
				foreach($pdo->query($sql) as $row) {

					if($row['rama'] === 'V'){
						if ($row['grupo'] === '2') {
							echo "<tr>";
							if($row['id']) {
								$num = $num +1;
								echo "<td align='center'>".$num."</td>";
							}
							echo "<td align='center'>".$row['nombre']."</td>";
							echo "<td align='center'>".$row['pts']."</td>";
							echo '</td>';
							echo "</tr>";
						}
					}
				}
				?>
			</tbody>
		</table>
	</div>

	<div class="col col-md-12"> <h3>Tabla general rama femenil</h3></div>
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

			$num = 0;
			foreach($pdo->query($sql) as $row) {

				if ($row['rama'] === 'F') {
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

	<div class="col col-md-6">
		<h3>Grupo 1 Femenil</h3>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<td align="center"><strong>Equipo</strong></td>
					<td align="center"><strong>Pts.</strong></td>
				</tr>
			</thead>
			<tbody>
				<?php
				$num = 0;
				foreach($pdo->query($sql) as $row) {

					if ($row['rama'] === 'F') {
						if($row['grupo'] === '1') {
							echo "<tr>";
							if($row['id']) {
								$num = $num +1;
								echo "<td align='center'>".$num."</td>";
							}
							echo "<td align='center'>".$row['nombre']."</td>";
							echo "<td align='center'>".$row['pts']."</td>";
							echo '</td>';
							echo "</tr>";
						}
					}
				}
				?>
			</tbody>
		</table>
	</div>

	<div class="col col-md-6">
		<h3>Grupo 2 Femenil</h3>
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>&nbsp;</td>
					<td align="center"><strong>Equipo</strong></td>
					<td align="center"><strong>Pts.</strong></td>
				</tr>
			</thead>
			<tbody>
				<?php
				$num = 0;
				foreach($pdo->query($sql) as $row) {

					if($row['rama'] === 'F'){
						if ($row['grupo'] === '2') {
							echo "<tr>";
							if($row['id']) {
								$num = $num +1;
								echo "<td align='center'>".$num."</td>";
							}
							echo "<td align='center'>".$row['nombre']."</td>";
							echo "<td align='center'>".$row['pts']."</td>";
							echo '</td>';
							echo "</tr>";
						}
					}
				}
				?>
			</tbody>
		</table>
	</div>

</div>
<?php include('pie.php');?>
