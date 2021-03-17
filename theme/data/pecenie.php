<?php 

	echo "[" /*. '<br>'*/;
	$i = 1;

	$subor = file("../data/denneMenu.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($subor as $riadok) {
        list($nazov, $cesto, $gramy, $cena, $obrazok) = explode(';', $riadok);
        if ($i == 1) {
        	$i++;
        } else {
        	echo ',' /*. '<br>'*/;
        }
        echo '{"nazov":"' . $nazov . '","cesto":"' . ucfirst($cesto) . '","gramy":"' . $gramy . '","cena":"' . number_format($cena, 2, ',', ' ') . '","obrazok":"' . $obrazok . '"}';
    }

	echo /*'<br>' .*/ "]";

 ?>