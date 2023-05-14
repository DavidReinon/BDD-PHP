<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");
echo "<link rel='stylesheet' href='../../css/styles.css' />";

$dni = $_POST['dni'];

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];

$consulta = "UPDATE alumnos SET nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono', fechaNacimiento = '$fechaNacimiento' WHERE dni = '$dni';";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "No se ha podido ejecutar la modificacion de este registro.";
} elseif (!$error) {
    echo "Registro modificado correctamente";
}
echo "<br><a href='../mostrar_datos_alumnos.php'><button type='button'>Lista Alumnado</button></a>";
