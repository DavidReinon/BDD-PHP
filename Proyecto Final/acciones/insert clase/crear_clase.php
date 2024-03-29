<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");
echo "<link rel='stylesheet' href='../../css/styles.css' />";

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
    echo "<br><a href='crear_clase.html'><button type='button'>Volver a crear clase</button></a>";
} elseif (!$error) {
    echo "Clase creada correctamente";
    echo "<br><a href='../mostrar_datos_clases.php'><button type='button'>Volver Lista Clases</button></a>";
}
