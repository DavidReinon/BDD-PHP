<?php

define("PI", 3.14159);
if (is_numeric($_REQUEST["frecuencia"]) && is_numeric($_REQUEST["inductancia"])) {
    $frec = $_REQUEST["frecuencia"];
    $indu = $_REQUEST["inductancia"];

    $react = 2 * PI * $frec * $indu;

    echo "EL resultado de la reactancia es $react ohmios <br>";
} else echo "Los valores tienen que ser numericos <br>";

echo "<a href='reactancia.html'>Volver</a>";
