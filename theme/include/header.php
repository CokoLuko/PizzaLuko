<?php

    if (!isset($neopakovatelnostHlavicky)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Delikatesy</title>

    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="../../assets/icomoon/style.css">

    <script type="text/javascript" src="../../assets/vue/vue.js"></script>
</head>

<body>
<!-- Hlavička -->
<header>
    <div class="container">
        <span class="icon-phone mx-2 icon"></span><span>+421 905 123 456</span>
        <span class="icon-envelop mx-2 icon"></span><span>info@gmail.com</span>
        <a class="icon-instagram float-sm-right mx-2 mt-2 icon"></a>
        <a class="icon-facebook float-sm-right mx-2 mt-2 icon"></a>
        <a class="icon-twitter float-sm-right mx-2 mt-2 icon"></a>
    </div>
</header>

<?php include "../include/navigation.php" ?>
<?php include "../include/introduction.php" ?>
<?php
    }

    $neopakovatelnostHlavicky = 1;

?>