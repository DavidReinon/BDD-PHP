<!-- David Reinon Garcia -->
<?php
$blanco = '&nbsp ';

$Numero = $_REQUEST["numero"];

if (($Numero >= 2) && ($Numero <= 24))

    for ($fila = 1; $fila <= $Numero; $fila++) {
        for ($i = 1; $i <= $Numero - $fila; $i++)
            echo ($blanco);

        for ($i = 1; $i <= (2 * $fila) - 1; $i++)
            echo ("*");


        echo ("<br>");
    }

else
    echo ("Lado erroneo. Repita de nuevo");
