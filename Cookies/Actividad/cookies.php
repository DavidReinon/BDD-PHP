<?php

setcookie("colorFondo", "__", time() - 1000, "/");
setcookie("colorLetra", "__", time() - 1000, "/");

if ($_REQUEST['radio1'] == "azul")
    $colorFondo = "006AFF";
elseif ($_REQUEST['radio1'] == "rojo")
    $colorFondo = "FF0000";
elseif ($_REQUEST['radio1'] == "verde")
    $colorFondo = "17FF00";

setcookie("colorFondo", $colorFondo, time() + 60 * 60 * 24 * 365, "/");

if ($_REQUEST['radio2'] == "azul")
    $colorLetra = "006AFF";
elseif ($_REQUEST['radio2'] == "rojo")
    $colorLetra = "FF0000";
elseif ($_REQUEST['radio2'] == "verde")
    $colorLetra = "17FF00";

setcookie("colorLetra", $colorLetra, time() + 60 * 60 * 24 * 365, "/");

header("Location: pag1.php");