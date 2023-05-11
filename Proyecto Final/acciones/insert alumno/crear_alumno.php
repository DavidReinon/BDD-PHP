<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];

$consulta = "INSERT INTO alumnos (dni, nombre, apellidos, telefono, fechaNacimiento) VALUES 
('$dni', '$nombre', '$apellidos', '$telefono', '$fechaNacimiento')
;";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$error = $datos_consulta["bool"];

if ($error) {
    echo "El DNI introudcido ya existe";
    echo "<br><a href='crear_alumno.html'><button type='button'>Volver a crear alumno</button></a>";
} else {
    echo "Alumno creado correctamente";
}
echo "<br><a href='../mostrar_datos_alumnos.php'><button type='button'>Volver Lista Alumnado</button></a>";
echo "<br><a href='../index.html'><button type='button'>Volver al index</button></a>";
