<?php

session_start();

include '../include/funkcie.php';

function prih() {
    if (basename(dirname($_SERVER['SCRIPT_FILENAME'])) != "prihlasenie") {
        die(header('Location: ../prihlasenie'));
    }
}

// podmienka podla toho ci je prihaseny
if (isset($_SESSION['prezyvka']) && isset($_SESSION['heslo'])) {
    $prezyvka = $_SESSION['prezyvka'];
    $heslo = $_SESSION['heslo'];

    include '../include/pripojenie.php';

    $sql = "SELECT heslo FROM admini WHERE prezyvka = '" . $prezyvka . "'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if (base64_decode($row['heslo']) == base64_decode($heslo)) {
            
            // var_dump($_SESSION);

            // header('Location: domov');
        } else {
            prih();
        }
      }
    } else {
        prih();
    }

    $db->close();
} else {
    prih();
}

$zak_funkcie = new l_zakladne_funkcie;

?>

<!doctype html>
<html lang="sk">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="../../assets/icomoon/style.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../../assets/vue/vue.js"></script>
  </head>
  <body class="akesi-pozadie">

<!-- Nav -->
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="../domov/index.php"><span class="flaticon-pizza-1"></span> Zdenka<br><small>Delikatesy</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto" id="menuNavigacia">
                <li class="nav-item">
                    <a class="nav-link" href="../../theme/domov">spať</a>
                </li>
            </ul>
        </div>
    </div>
</nav>