<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
ErrorConexion($mysqli);
