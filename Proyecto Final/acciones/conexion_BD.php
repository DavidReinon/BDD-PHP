<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die("Salida del programa. Error acceso a BBDD");
}
