<?php
function ErrorConexion($mysqli)
{
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die("Salida del programa. Error acceso a BBDD");
    }
}
function ErrorConsulta($mysqli, $consulta)
{
    if (!$resultado = $mysqli->query($consulta)) {
        echo "Lo sentimos. App falla<br>";
        echo "Error en $consulta <br>";
        echo "Num.error: " . $mysqli->errno . "<br>";
        echo "Error: " . $mysqli->error . "<br>";
        return false;
    }
    return $resultado;
}

