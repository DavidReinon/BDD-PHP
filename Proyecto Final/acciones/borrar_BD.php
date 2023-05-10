<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("conexion_BD.php");
$confirmacion = $_POST["confirmacion"];

if ($confirmacion != "borrar") {
    echo "<h2>La base de datos no ha sido borrada, siga los pasos correctos para ejecutar el borrado</h2>";
    echo "<a href='../index.html'><button type='button'>Volver al inicio</button></a>";
    die();
}

$database = "academia";
$consulta = "DROP DATABASE $database;";
ErrorConsulta($mysqli, $consulta);

echo "<h1>Base de datos borrada</h1>";
echo "<a href='../index.html'><button type='button'>Volver al inicio</button></a>";
