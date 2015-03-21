<?php 
error_reporting(E_ALL ^E_NOTICE );
$op = $_GET['op'];

switch ($op) {
	case 'convocatoria':
		$contenido = "convocatoria.php";
		$titulo = "Intercoles Convocatoria";
	break;
	
	case 'estadisticas':
		$contenido = "estadisticas.php";
		$titulo = "Intercoles Estadisticas";
	break;
	
	case 'proximos_partidos':
		$contenido = "proximos_partidos.php";
		$titulo = "Intercoles Proximos Partidos";
	break;

	case 'videos':
		$contenido = "videos.php";
		$titulo = "Intercoles Videos";
	break;

	case 'galeria':
		$contenido = "galeria.php";
		$titulo = "Intercoles Galeria";
	break;

	default:
		$contenido = "home.php";
		$titulo = "Intercoles 2015";
	break;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="El Torneo de Intercoles de Azteca Oaxaca 2015, es el único torneo estudiantil que se transmite en televisión.">
    <meta name="keywords" content="Azteca deportes, Intercoles, Torneo de Azteca Oaxaca, Kiddos, Rabbits, Juniors, Tiggers, Warriors, Teens, Mini teens, torneo de futbol estudiantil, torneo de futbol Oaxaca">

    <title>INTERCOLES 2015</title>

    <!--script js-->
    <script src="js/jquery.min.js"></script>
    <script src="galleria/galleria-1.4.2.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
	<div class="page">
		<header class="list">
			<div class="cab">
				<div class="menu">
					<ul>
						<li><a href="?op=convocatoria" class="op">Convocatoria</a></li>
						<li><a href="?op=estadisticas" class="op">Estadisticas</a></li>
						<li><a href="?op=proximos_partidos" class="op">Proximos Partidos</a></li>
						<li><a href="?op=videos" class="op">Videos</a></li>
						<li><a href="?op=galeria" class="op">Galeria</a></li>
					</ul>
				</div>
				<div class="logo">
					<a href="index.php">
						<img src="imagenes/logo.png" height="3300" width="2550">
					</a>
				</div>
			</div>
		</header>

		<?php include($contenido); ?>

		<footer>
			<div class="elpie">
				<p> AZTECA INTERCOLES OAXACA 2015. TODOS LOS DERECHOS RESERVADOS</p>
				<ul>
					<li><a href="?op=convocatoria" class="op2">Convocatoria</a></li>
					<li><a href="?op=estadisticas" class="op2">Estadistica</a></li>
					<li><a href="?op=proximos_partidos" class="op2">Proximos Partidos</a></li>
					<li><a href="?op=videos" class="op2">Videos</a></li>
					<li><a href="?op=galeria" class="op2">Galeria</a></li>
				</ul>
				<div class="redes" style="position: relative;text-align: center;">
					<ul>
						<li><a href="https://es-es.facebook.com/AztecaOaxacaOficial" target="_blank"><img src="imagenes/social/facebook.png" width="82" height="81" /></a></li>
						<li><a href="https://www.youtube.com/watch?v=0sYELi1YD-Q" target="_blank"><img src="imagenes/social/youtube.png" width="82" height="81" /></a></li>
						<li><a href="https://twitter.com/aztecaoaxaca" target="_blank"><img src="imagenes/social/twitter.png" width="82" height="81" /></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	
</body>
</html>
