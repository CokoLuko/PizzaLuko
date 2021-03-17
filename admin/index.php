<?php

session_start(); 

// podmienka podla toho ci je prihaseny
if (isset($_COOKIE['prezyvka']) && isset($_COOKIE['heslo'])) {
	$prezyvka = $_COOKIE['prezyvka'];
	$heslo = $_COOKIE['heslo'];

	function prih() {header('Location: prihlasenie');}

	include 'include/pripojenie.php';

	$sql = "SELECT meno, priezvisko, mail, pravomoci, heslo, obrazok FROM admini WHERE prezyvka = '" . $prezyvka . "'";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	if (base64_decode($row['heslo']) == base64_decode($heslo)) {
	  		$_SESSION['prezyvka'] = $prezyvka;
		  	$_SESSION['heslo'] = $row['heslo'];
		  	$_SESSION['meno'] = $row['meno'];
		  	$_SESSION['priezvisko'] = $row['priezvisko'];
		  	$_SESSION['mail'] = $row['mail'];
		  	$_SESSION['pravomoci'] = $row['pravomoci'];
			$_SESSION['obrazok'] = $row['obrazok'];

	      // var_dump($_SESSION);

		  	header('Location: domov');
	  	} else {
	  		prih();
	  	}
	  }
	} else {
		prih();
	}

	$db->close();
} else {
	header('Location: prihlasenie');
}

 ?>