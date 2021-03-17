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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
                <li class="nav-item" v-for="web in menu">
                    <a class="nav-link" :href="'../../theme/' + web.url">{{ web.nazov }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
    var menuNavigacia = new Vue({
    
      el: "#menuNavigacia",
      data: {
        menu: [],
        aktivna: ''
      },
      created: async function () {
        fetch("../include/menuHore.php")
            .then(odpoved => odpoved.json())
            .then(data => this.menu = data);
        pomocAktivity = window.location.pathname;
        pomocAktivity = pomocAktivity.replace(/\/$/, '');
        this.aktivna = pomocAktivity.replace(/.*\//, '');
      }
    
    })
</script>

<section class="container-fluid telo mb-5">
    <div class="row">
        <div class="col-sm-2">
            <div class="admin">
                <div class="pt-4">
                    <div class="profilovka">
                        <img src="../profilovky/<?php echo $_SESSION['obrazok']; ?>" alt="profilová fotka">
                    </div>
                </div>
                <div class="text-center mt-2 admin-meno">
                    <?php echo $_SESSION['meno'] . ' ' . $_SESSION['priezvisko']; ?>
                </div>
                <div class="text-center">
                    <?php echo $_SESSION['prezyvka']; ?>
                </div>
                <div class="text-center pb-3">
                    <?php
                        if ($_SESSION['pravomoci'] == "0") {
                            echo "administrátor";
                        }
                    ?>
                </div>
            </div>
            <div class="mt-4 menu-bok" id="menuBok">
                <ul class="nav flex-column">
                  <li class="nav-item" v-for="web in menu">
                    <a class="nav-link" :class="[aktivna == web.url ? 'aktivna' : '']" :href="'../' + web.url"><span v-html="web.ikona"></span> <span>{{ web.nazov }}</span></a>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link text-left" v-on:click="odhlasenie()"><span>
                        <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-door-closed' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z'/>
                            <path d='M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z'/>
                        </svg>
                    </span> <span>Odhlásenie</span></button>
                  </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript" src="../data/menuBok.js"></script>
        <div class="col-sm-10 praca cierne-text">