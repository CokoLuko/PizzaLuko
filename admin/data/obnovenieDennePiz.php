<?php

$i = 1;

include '../include/pripojenie.php';

$del = "DELETE FROM pizze_dnes";
$result = $db->query($del);

$sql = "SELECT * FROM pizze";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // var_dump($row);
  	$lala = "INSERT INTO pizze_dnes (nazov, popis, cena, vaha, foto) VALUES ('" . $row['nazov'] . "', '" . $row['popis'] . "', '" . $row['cena'] . "', '" . $row['vaha'] . "', '" . $row['foto'] . "')";
    $db->query($lala);
  }
}

$db->close();

?>