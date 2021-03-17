<?php

setcookie("prezyvka", $_SESSION['prezyvka'], time() + (86400 * 30), "/");
setcookie("heslo", $_SESSION['heslo'], time() + (86400 * 30), "/");
setcookie("meno", $_SESSION['meno'], time() + (86400 * 30), "/");
setcookie("priezvisko", $_SESSION['priezvisko'], time() + (86400 * 30), "/");
setcookie("mail", $_SESSION['mail'], time() + (86400 * 30), "/");
setcookie("pravomoci", $_SESSION['pravomoci'], time() + (86400 * 30), "/");
setcookie("obrazok", $_SESSION['obrazok'], time() + (86400 * 30), "/");

?>