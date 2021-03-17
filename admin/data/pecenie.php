<?php

$i = 1;

include '../include/pripojenie.php';

$sql = "SELECT * FROM pizze_dnes";
// $sql = "SELECT * FROM pizze";
$result = $db->query($sql);

echo '[';

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	if ($i == 1) {
        	$i++;
        } else {
        	echo ',' /*. '<br>'*/;
        }
    echo json_encode($row);
  }
} else {
  echo "0 results";
}

echo ']';

$db->close();

?>