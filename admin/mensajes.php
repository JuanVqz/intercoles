<?php 

if(isset($_GET['hecho'])) {
	$hecho = $_GET['hecho'];
	echo "<p class='alert alert-success'>$hecho</p>";
}

if(isset($_GET['error'])) {
	$error = $_GET['error'];
	echo "<p class='alert alert-danger'>$error</p>";
}

?>