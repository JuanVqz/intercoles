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
<?php include('cabeza.php');?>
<div class="container">
	<h2> Bienvenido, <?php echo $usuario;?>.</h2>
	<a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesion</a>
	<hr>
	<h1>Estadisticas:</h1>
	
	<a href="mostrar_equipo.php"><h2>Ver equipos</h2></a>

</div>
<?php include('pie.php');?>
