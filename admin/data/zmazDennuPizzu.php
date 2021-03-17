<?php

if (isset($_REQUEST['id'])) {
	include '../include/pripojenie.php';

	// $sql = "DELETE FROM pizze_dnes WHERE '" . $_REQUEST['id'] . "'";
	$sql = "DELETE FROM pizze_dnes WHERE id='" . $_REQUEST['id'] . "'";
	$result = $db->query($sql);

	// echo 1;
	echo '"1"';

	$db->close();
}