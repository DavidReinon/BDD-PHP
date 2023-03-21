<?php
## David Reinon Garcia

if (is_numeric($_REQUEST["base"]) && is_numeric($_REQUEST["altura"])) {
    $base = $_REQUEST["base"];
    $altura = $_REQUEST["altura"];

    echo ("Base elegida: $base<br>");
    echo ("Altura elegida: $altura<br>");
    echo "---------------------------------<br>";
    $area = $base * $altura;
    echo ("Area del romboide: $area<br>");
    $perimetro = 2 * ($base + $altura);
    echo ("Perimetro del romboide: $perimetro<br>");
} else echo "Valores no validos. Vuelve al formulario<br>";

echo "<a href='romboide.html'>Volver</a>";
