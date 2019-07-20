<?php
	session_start();
	session_destroy();
	header("Location: detective_login.php");
	exit;
?>