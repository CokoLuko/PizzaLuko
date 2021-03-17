<?php

$i = 1;

include '../include/pripojenie.php';

$sql = "SELECT nazov, url FROM menu";
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
    echo '{"nazov":"' . $row['nazov'] . '","url":"' . $row['url'] . '"}';
  }
} else {
  echo "0 results";
}

echo ']';

$db->close();

?>