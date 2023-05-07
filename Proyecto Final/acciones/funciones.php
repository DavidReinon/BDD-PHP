<?php
function ErrorConsulta($mysqli, $consulta)
{
    if (!$resultado = $mysqli->query($consulta)) {
        echo "Lo sentimos. App falla<br>";
        echo "Error en $consulta <br>";
        echo "Num.error: " . $mysqli->errno . "<br>";
        echo "Error: " . $mysqli->error . "<br>";
        exit;
    }
    return $resultado;
}

