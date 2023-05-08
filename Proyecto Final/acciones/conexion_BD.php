<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");

$servidor = "localhost";
$usuario = "root";
$clave = "";
$database = "academia";

@$mysqli = new mysqli($servidor, $usuario, $clave, $database);
ErrorConexion($mysqli);
