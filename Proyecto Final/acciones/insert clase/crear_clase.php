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

if (!ErrorConsulta($mysqli, $consulta)["bool"]) {
    echo "Clase creada correctamente";
    echo "<br><a href='../index.html'>Volver al index</a>";
    echo "<br><a href='../mostrar_datos_clases.php'>Volver a el registro de clases</a>";
}
