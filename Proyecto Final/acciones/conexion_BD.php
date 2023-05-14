<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");
echo "<link rel='stylesheet' href='../css/styles.css' />";

$servidor = "localhost";
$usuario = "root";
$clave = "";
$database = "academia";

@$mysqli = new mysqli($servidor, $usuario, $clave, $database);
ErrorConexion($mysqli);
