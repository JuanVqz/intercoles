<div class="text-center">			
	<h2>ESTADÌSTICA GENERAL VARONIL</h2>
	<div class="table-responsive">	
	<table class="table table-bordered table-hover table-condensed ">
		<thead>
			<tr>
				<td>#</td>
				<td><strong>EQUIPO</strong></td>
				<td><strong>JJ</strong></td>
				<td><strong>JG</strong></td>
				<td><strong>JE</strong></td>
				<td><strong>JP</strong></td>
				<td><strong>GF</strong></td>
				<td><strong>GC</strong></td>
				<td><strong>DIF</strong></td>
				<td><strong>PTS</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php
			include("admin/database.php");
			$pdo = Database::connect();
			$sql = " SELECT * FROM ramas ORDER BY pts DESC, dif DESC ";

			foreach($pdo->query($sql) as $row) {

				if ($row['rama'] === 'V') {
					
					if($row['id']) {
						$num = $num +1;
						if($num < 9) {
							echo "<tr class='success'>";		
						} else {
							echo "<tr>";
						}
						echo "<td>".$num."</td>";
					}
					echo "<td>".$row['nombre']."</td>";
					echo "<td>".$row['jj']."</td>";
					echo "<td>".$row['jg']."</td>";
					echo "<td>".$row['je']."</td>";
					echo "<td>".$row['jp']."</td>";
					echo "<td>".$row['gf']."</td>";
					echo "<td>".$row['gc']."</td>";
					echo "<td>".$row['dif']."</td>";
					echo "<td>".$row['pts']."</td>";
					echo "</tr>";
				}
			}
			?>
		</tbody>
	</table>
	</div>
</div>

<!-- GRUPO I VARONIL -->
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target=".g1v">GRUPO I VARONIL</button>

<div class="modal fade g1v" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="text-center">
      
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<td>#</td>
						<td><strong>EQUIPO</strong></td>
						<td><strong>PTS</strong></td>
					</tr>	
				</thead>
				<tbody>
					<?php
						$num = 0;
						foreach($pdo->query($sql) as $row) {
							if($row['grupo'] == 1) {
								if ($row['rama'] === 'V') {
									echo "<tr>";
										if($row['id']) {
											$num = $num +1;
											echo "<td>".$num."</td>";
										}
										echo "<td align='center'>".$row['nombre']."</td>";
										echo "<td align='center'>".$row['pts']."</td>";
									echo "</tr>";
								}
							}
						}
					?>
				</tbody>
			</table>
      </div>
    </div>
  </div>
</div>
<br>

<!-- GRUPO II VARONIL -->
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target=".g2v">GRUPO II VARONIL</button>

<div class="modal fade g2v" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="text-center">
      	
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<td>#</td>
						<td><strong>EQUIPO</strong></td>
						<td><strong>PTS</strong></td>
					</tr>	
				</thead>
				<tbody>
					<?php
						$num = 0;
						foreach($pdo->query($sql) as $row) {
							if ($row['grupo'] == 2) {
								if ($row['rama'] === 'V') {
									echo "<tr>";
										if($row['id']) {
											$num = $num +1;
											echo "<td align='center'>".$num."</td>";
										}
										echo "<td align='center'>".$row['nombre']."</td>";
										echo "<td align='center'>".$row['pts']."</td>";
									echo "</tr>";
								}
							}
						}
					?>
				</tbody>
			</table>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="text-center">
	<h2>ESTADÌSTICA GENERAL FEMENIL</h2>
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>#</td>
					<td><strong>EQUIPO</strong></td>
					<td><strong>JJ</strong></td>
					<td><strong>JG</strong></td>
					<td><strong>JE</strong></td>
					<td><strong>JP</strong></td>
					<td><strong>GF</strong></td>
					<td><strong>GC</strong></td>
					<td><strong>DIF</strong></td>
					<td><strong>PTS</strong></td>
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
									if($num < 9) {
										echo "<tr class='success'>";		
									} else {
										echo "<tr>";
									}
									echo "<td>".$num."</td>";
								}
								echo "<td>".$row['nombre']."</td>";
								echo "<td>".$row['jj']."</td>";
								echo "<td>".$row['jg']."</td>";
								echo "<td>".$row['je']."</td>";
								echo "<td>".$row['jp']."</td>";
								echo "<td>".$row['gf']."</td>";
								echo "<td>".$row['gc']."</td>";
								echo "<td>".$row['dif']."</td>";
								echo "<td>".$row['pts']."</td>";
							echo "</tr>";
						}
					}
				?>	
			</tbody>
		</table>
	</div>	
</div>

<!-- GRUPO I FEMENIL -->
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target=".g1f">GRUPO I FEMENIL</button>

<div class="modal fade g1f" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="text-center">
      	
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<td>#</td>
					<td><strong>EQUIPO</strong></td>
					<td><strong>PTS</strong></td>
				</tr>	
			</thead>
			<tbody>
				<?php
					$num = 0;
					foreach($pdo->query($sql) as $row) {
						if ($row['grupo'] == 1) {
							if ($row['rama'] === 'F') {
								echo "<tr>";
									if($row['id']) {
										$num = $num +1;
										echo "<td align='center'>".$num."</td>";
									}
									echo "<td align='center'>".$row['nombre']."</td>";
									echo "<td align='center'>".$row['pts']."</td>";
								echo "</tr>";
							}
						}
					}
				?>
			</tbody>
		</table>	
      </div>
    </div>
  </div>
</div>
<br>
<!-- GRUPO II FEMENIL -->
<button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target=".g2f">GRUPO II FEMENIL</button>

<div class="modal fade g2f" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="text-center">
      	
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<td>#</td>
						<td><strong>EQUIPO</strong></td>
						<td><strong>PTS</strong></td>
					</tr>	
				</thead>
				<tbody>
					<?php
						$num = 0;
						foreach($pdo->query($sql) as $row) {
							if ($row['grupo'] == 2) {
								if ($row['rama'] === 'F') {
									echo "<tr>";
										if($row['id']) {
											$num = $num +1;
											echo "<td align='center'>".$num."</td>";
										}
										echo "<td align='center'>".$row['nombre']."</td>";
										echo "<td align='center'>".$row['pts']."</td>";
									echo "</tr>";
								}
							}
						}
					?>
				</tbody>
			</table>
      </div>
    </div>
  </div>
</div>


