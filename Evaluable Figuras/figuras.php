<?php
##David Reinon
function perimetro_pentagono($bLado)
{
    $res = 5 * $bLado;
    return $res;
}

function area_pentagono($aApotema, $bLado)
{
    $res = (perimetro_pentagono($bLado) * $aApotema) / 2;
    return $res;
}

function perimetro_hexagono($bLado)
{
    $res = 6 * $bLado;
    return $res;
}

function area_hexagono($aApotema, $bLado)
{
    $res = (perimetro_pentagono($bLado) * $aApotema) / 2;
    return $res;
}

$apotema = $_REQUEST["apotema"];
$lado = $_REQUEST["lado"];
$eleccionFigura = $_REQUEST["eleccion"];
$eleccionCalculo = $_REQUEST["eleccion2"];

if ($eleccionFigura == "botonPentagono") {
    if (is_numeric($apotema) && is_numeric($lado)) {

        if ($eleccionCalculo == "botonPerimetro") {
            $perimetro = perimetro_pentagono($lado);
            echo "El perímetro del pentágono es $perimetro<br>";
        } else {
            $area = area_pentagono($apotema, $lado);
            echo "El área del pentágono es $area<br>";
        }
    } else {
        echo "Faltan valores de entrada o son erróneos<br>";
    }
}

if ($eleccionFigura == "botonHexagono") {
    if (is_numeric($apotema) && is_numeric($lado)) {

        if ($eleccionCalculo == "botonPerimetro") {
            $perimetro = perimetro_hexagono($lado);
            echo "El perímetro del hexágono es $perimetro<br>";
        } else {
            $area = area_hexagono($apotema, $lado);
            echo "El área del hexágono es $area<br>";
        }
    } else {
        echo "Faltan valores de entrada o son erróneos<br>";
    }
}
echo ("<br><br><a href='figuras.html'>Volver al formulario</a>");
