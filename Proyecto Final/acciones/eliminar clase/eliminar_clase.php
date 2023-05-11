<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$id = $_POST['id'];

$consulta = "DELETE FROM clases WHERE id = '$id'";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "No se ha podido ejecutar la eliminacion de este registro.";
} elseif (!$error) {
    echo "Registro eliminado correctamente";
}
echo "<br><a href='../mostrar_datos_clases.php'><button type='button'>Volver Lista Completa Clases</button></a>";
echo "<br><a href='../../index.html'><button type='button'>Volver al index</button></a>";
