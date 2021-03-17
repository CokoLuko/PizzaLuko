<?php

$serverDb = "localhost";
$prihMenoDb = "luko";
$prihHesloDb = "koluko";
$menoDb = "luko_pizzeria";

// Create connection
$db = new mysqli($serverDb, $prihMenoDb, $prihHesloDb, $menoDb);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>