<?php
session_start();
if($_SESSION['auth'] != 'SI') {
	header("Location: index.php");
	exit();
}

?>
