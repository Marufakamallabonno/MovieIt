<?php
	include 'Connection.php';
	session_start();
	session_destroy();
	header('Location: /MovieItF/MovieIt/SignIn.php');

?>