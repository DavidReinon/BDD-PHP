<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$id = $_POST['id'];
//echo "Estas seguro de eliminar el siguiente registro";
//Segunedo spreen
$consulta = "DELETE FROM clases WHERE id = '$id'";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "No se ha podido ejecutar la eliminacion de este registro.";
    echo "<br><a href='../mostrar_datos_clases.php'>Volver a el registro completo de clases</a>";
    echo "<br><a href='../index.html'>Volver al index</a>";
} elseif (!$error) {
    echo "Registro eliminado correctamente";
    echo "<br><a href='../mostrar_datos_clases.php'>Volver a el registro completo de clases</a>";
    echo "<br><a href='../index.html'>Volver al index</a>";
}
