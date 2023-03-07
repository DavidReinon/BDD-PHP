<?php

if (is_numeric($_REQUEST["num1"]) && is_numeric($_REQUEST["num2"])) {
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    $operacion = $_REQUEST["operacion"];
    switch ($operacion) {
        case 'suma':
            echo ("Valor 1: " . $num1 . "<br>");
            echo ("Valor 2: " . $num2 . "<br>");
            echo ("====================<br>");
            echo ("El resultado es: " . ($num1 + $num2) . "<br>");
            break;
        case 'resta':
            echo ("Valor 1: " . $num1 . "<br>");
            echo ("Valor 2: " . $num2 . "<br>");
            echo ("====================<br>");
            echo ("El resultado es: " . ($num1 - $num2) . "<br>");
            break;
        case 'multi':
            echo ("Valor 1: " . $num1 . "<br>");
            echo ("Valor 2: " . $num2 . "<br>");
            echo ("====================<br>");
            echo ("El resultado es: " . ($num1 * $num2) . "<br>");
            break;
        case 'div':
            if ($num2 == 0) {
                echo ("No se puede dividir entre 0. <br>");
            } else {
                echo ("Valor 1: " . $num1 . "<br>");
                echo ("Valor 2: " . $num2 . "<br>");
                echo ("====================<br>");
                echo ("El resultado es: " . ($num1 / $num2) . "<br>");
            }
            break;
    }
} else {
    echo ("Introduzca datos numericos. <br>");
}

echo ("<a href='calc.html'>Volver</a>");
