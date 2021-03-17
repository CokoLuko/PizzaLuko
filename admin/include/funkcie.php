<?php

class l_zakladne_funkcie {
	
	function test_vstup($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

}

?>