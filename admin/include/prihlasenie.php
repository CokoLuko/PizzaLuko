<?php

session_start();

include '../include/funkcie.php';

$funkcie = new l_zakladne_funkcie;

if (isset($_REQUEST['prezyvka']) && isset($_REQUEST['heslo'])) {
	$prezyvka = $funkcie->test_vstup($_REQUEST['prezyvka']);
	$heslo = $funkcie->test_vstup($_REQUEST['heslo']);
} else if (isset($_COOKIE['prezyvka']) && isset($_COOKIE['heslo'])) {
  $prezyvka = $_COOKIE['prezyvka'];
  $heslo = $_COOKIE['heslo'];
} else {die('"1"');}

include '../include/pripojenie.php';

$sql = "SELECT meno, priezvisko, mail, pravomoci, heslo, obrazok FROM admini WHERE prezyvka = '" . $prezyvka . "'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	if (base64_decode($row['heslo']) == $heslo) {
  		$_SESSION['prezyvka'] = $prezyvka;
	  	$_SESSION['heslo'] = $row['heslo'];
	  	$_SESSION['meno'] = $row['meno'];
	  	$_SESSION['priezvisko'] = $row['priezvisko'];
	  	$_SESSION['mail'] = $row['mail'];
	  	$_SESSION['pravomoci'] = $row['pravomoci'];
      $_SESSION['obrazok'] = $row['obrazok'];

      // var_dump($_SESSION);

      if (isset($_REQUEST['zostat']) == TRUE) {
        include "../include/prihlasenie-cookies.php";
      }

	  	echo '"0"';
  	} else {
  		echo '"3"';
  	}
  }
} else {
  echo '"2"';
}

$db->close();

?>