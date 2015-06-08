<?php
error_reporting(E_ALL ^E_NOTICE );
$op = $_GET['op'];

switch ($op) {
	case 'estadisticas':
		$contenido = "estadisticas.php";
		$titulo = "ESTADISTICAS INTERCOLES";
	break;

	case 'convocatoria':
		$contenido = "convocatoria.php";
		$titulo = "CONVOCATORIA INTERCOLES";
	break;

	case 'proximos_partidos':
		$contenido = "proximos_partidos.php";
		$titulo = "PROXIMOS PARTIDOS INTERCOLES";
	break;

	case 'videos':
		$contenido = "videos.php";
		$titulo = "VIDEOS INTERCOLES";
	break;

	case 'galeria':
		$contenido = "galeria.php";
		$titulo = "GALERIA INTERCOLES";
	break;

	default:
		$contenido = "home.php";
		$titulo = "INTERCOLES 2015";
	break;

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta name="description" content="El Torneo de Intercoles de Azteca Oaxaca 2015, es el único torneo estudiantil que se transmite en televisión.">
    <meta name="keywords" content="Azteca deportes, Intercoles, Torneo de Azteca Oaxaca, intercoles 2015, torneo de futbol estudiantil, torneo de futbol Oaxaca, secundaria oaxaca 2015, tv azteca oaxaca 2015, torneo de secundarias oaxaca, intercoles oaxaca">

	<link rel="icon" type="image/png" href="icon.png">

    <title> <?php echo $titulo; ?> </title>
	
	<!--script js-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/galeria.css">

</head>
<body>
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav-arriba">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span><img src="icon.png" height="32" width="32"></span>INTERCOLES OAXACA</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
				<ul class="nav navbar-nav">
					<li class="<?php if($titulo == 'ESTADISTICAS INTERCOLES') { echo 'active'; } ?>"><a href="?op=estadisticas">ESTADISTICAS</a></li>
					<li class="<?php if($titulo == 'PROXIMOS PARTIDOS INTERCOLES') { echo 'active'; } ?>"><a href="?op=proximos_partidos">PRÓXIMOS PARTIDOS</a></li>
					<li class="<?php if($titulo == 'VIDEOS INTERCOLES') { echo 'active'; } ?>"><a href="?op=videos">VIDEOS</a></li>
					<li class="<?php if($titulo == 'GALERIA INTERCOLES') { echo 'active'; } ?>"><a href="?op=galeria">GALERÍAS</a></li>
					<li class="<?php if($titulo == 'CONVOCATORIA INTERCOLES') { echo 'active'; } ?>"><a href="?op=convocatoria">CONVOCATORIA</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	
				
	<div class="container">
		<?php include($contenido); ?>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12 col-md-6">	
					<div class="redes">
						<a href="https://es-es.facebook.com/AztecaOaxacaOficial" target="_blank"><img src="imagenes/social/facebook.png" width="40" height="40"/></a>
						<a href="https://www.youtube.com/watch?v=0sYELi1YD-Q" target="_blank"><img src="imagenes/social/youtube.png" width="40" height="40" /></a>
						<a href="https://twitter.com/aztecaoaxaca" target="_blank"><img src="imagenes/social/twitter.png" width="40" height="40" /></a>
					</div>
				</div>
				<div class="col col-xs-12 col-md-6">
					<div class="pull-right">
						<a href="?op=convocatoria" class="navbar-button btn btn-success">Convocatoria</a>
						<a href="?op=estadisticas" class="navbar-button btn btn-success">Estadistica</a>
						<a href="?op=proximos_partidos" class="navbar-button btn btn-success">Próximos Partidos</a>
						<a href="?op=videos" class="navbar-button btn btn-success">Videos</a>
						<a href="?op=galeria" class="navbar-button btn btn-success">Galerías</a>	
					</div>
				</div>
			</div>
			<div class="row">
				<p class="navbar-text pull-right"><strong>AZTECA INTERCOLES OAXACA 2015.</strong></p>			
			</div>
		</div>
	</footer>

	
</body>
</html>
