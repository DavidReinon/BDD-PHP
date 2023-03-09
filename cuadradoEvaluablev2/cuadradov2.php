<!-- David Reinon Garcia -->
<?php

$limite = $_REQUEST["limite"];
if (is_numeric($limite)) {
    if ($limite > 24 || $limite < 2) {
        echo ("El limite no se puede pasar de 24 ni ser menor que 2");
    } else {
        for ($i = 1; $i <= $limite; $i++) {
            for ($j = 1; $j <= $limite; $j++) {
                echo ("*");
            }
            echo ("<br>");
        }
    }
} else echo ("El limite no es numerico");

echo ("<br>");
echo ("<a href='cuadradov2.html'>Volver al formulario</a>");
