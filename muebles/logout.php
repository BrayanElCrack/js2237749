<?php
		//codigo para cerrar sesion

	session_start();
	session_destroy();
	header('Location: index.php');
?>