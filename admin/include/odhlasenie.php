<?php

	session_start();

	$_SESSION['heslo'] = "";
	$_SESSION['meno'] = "";
	$_SESSION['priezvisko'] = "";
	$_SESSION['mail'] = "";
	$_SESSION['pravomoci'] = "";
	$_SESSION['obrazok'] = "";

	include '../include/odhlasenie-cookies.php';

	echo '"1"';

?>