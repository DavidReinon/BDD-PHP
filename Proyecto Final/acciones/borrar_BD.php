<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("conexion_BD.php");
echo "<link rel='stylesheet' href='../css/styles.css' />";

$confirmacion = $_POST["confirmacion"];

if ($confirmacion != "borrar") {
    echo "<h2>La base de datos no ha sido borrada, siga los pasos correctamente para ejecutar el borrado</h2>";
    echo "<a href='../index.html'><button type='button'>Volver al inicio</button></a>";
    die();
}

$database = "academia";
$consulta = "DROP DATABASE $database;";

$error = ErrorConsulta($mysqli, $consulta)["bool"];

if ($error) {
    echo "<br><a href='../index.html'><button type='button'>Volver al index</button></a>";
    die();
}
echo "Base de datos borrada correctamente";
echo "<a href='../index.html'><button type='button'>Volver al index</button></a>";
