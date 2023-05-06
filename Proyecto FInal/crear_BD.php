<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
ErrorConexion($mysqli);

$baseDatos = "academia";

$consulta = "CREATE DATABASE IF NOT EXISTS $baseDatos;";
ErrorConsulta($mysqli, $consulta);

$mysqli->select_db($basedatos);
