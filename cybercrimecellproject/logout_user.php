<?php
	session_start();
	session_destroy();
	header("Location: loginacc.php");
	exit;
?>