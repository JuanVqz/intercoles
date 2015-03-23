<section>
<div class="content">
	<div class="inf">
		<h1>Azteca Intercoles Oaxaca 2015</h1>
		<h2>Estadísticas Rama Varonil </h2>

		<table  width="100%" border="0" cellpadding="0" cellspacing="0" >
			<tr>
				<td width="30" align="left"  >&nbsp;</td>
				<td width="350" align="left"  ><strong>Equipo</strong></td>
				<td width="36" align="center"  ><strong>JJ</strong></td>
				<td width="36" align="center"  ><strong>JG</strong></td>
				<td width="36" align="center"  ><strong>JE</strong></td>
				<td width="36" align="center"  ><strong>JP</strong></td>
				<td width="36" align="center"  ><strong>GF</strong></td>
				<td width="36" align="center"  ><strong>GC</strong></td>
				<td width="36" align="center"  ><strong>Dif</strong></td>
				<td width="37" align="center"  ><strong>Pts.</strong></td>
			</tr>

				<?php
					include("admin/database.php");
					$pdo = Database::connect();
					$sql = " SELECT * FROM ramas ORDER BY pts DESC ";

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
							echo "</tr>";

						}
					}
				?>
		</table>

		<h2>Estadísticas Rama Femenil</h2>
		<table  width="100%" border="0" cellpadding="0" cellspacing="0" >
			<tr>
				<td width="30" align="left"  >&nbsp;</td>
				<td width="350" align="left"  ><strong>Equipo</strong></td>
				<td width="36" align="center"  ><strong>JJ</strong></td>
				<td width="36" align="center"  ><strong>JG</strong></td>
				<td width="36" align="center"  ><strong>JE</strong></td>
				<td width="36" align="center"  ><strong>JP</strong></td>
				<td width="36" align="center"  ><strong>GF</strong></td>
				<td width="36" align="center"  ><strong>GC</strong></td>
				<td width="36" align="center"  ><strong>Dif</strong></td>
				<td width="37" align="center"  ><strong>Pts.</strong></td>
			</tr>
				<?php
					$num = 0;
					foreach($pdo->query($sql) as $row) {
						if ($row['rama'] == 'F') {
							echo "<tr>";
								if($row['id']) {
									$num = $num+1;
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
							echo "</tr>";
						}
					}
					Database::disconnect();
				?>
		</table>

	</div>
</div>
</section>
