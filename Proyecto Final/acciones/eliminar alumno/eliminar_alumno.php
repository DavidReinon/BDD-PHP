<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");
echo "<link rel='stylesheet' href='../../css/styles.css' />";

$dni = $_POST['dni'];

$consulta = "DELETE FROM alumnos WHERE dni = '$dni'";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "No se ha podido ejecutar la eliminacion de este registro.";
} elseif (!$error) {
    echo "Registro eliminado correctamente";
}
echo "<br><a href='../mostrar_datos_alumnos.php'><button type='button'>Lista Alumnos</button></a>";
