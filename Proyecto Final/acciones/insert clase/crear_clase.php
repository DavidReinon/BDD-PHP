<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$dia = $_POST['dia'];
$hora = $_POST['hora'];
$sala = $_POST['sala'];
$materia = $_POST['materia'];
$dni = $_POST['dni'];

$consulta = "INSERT INTO clases (dia, hora, sala, materia, dniAlumno)
SELECT '$dia', '$hora', '$sala', '$materia', '$dni'
FROM dual
WHERE NOT EXISTS (
    SELECT 1 FROM clases
    WHERE sala = '$sala' AND dia = '$dia' AND hora = '$hora'
);";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "Ya existe una clase creada en esa sala a esa hora y dia.";
    echo "<br><a href='../crear_clase.html'>Volver a crear clase</a>";
    echo "<br><a href='../index.html'>Volver al index</a>";
} elseif (!$error) {
    echo "Clase creada correctamente";
    echo "<br><a href='../mostrar_datos_clases.php'>Volver a el registro de clases</a>";
    echo "<br><a href='../index.html'>Volver al index</a>";
}
