<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$id = $_POST['id'];

$dia = $_REQUEST["dia"];
$hora = $_REQUEST["hora"];
$sala = $_REQUEST["sala"];
$materia = $_REQUEST["materia"];
$dni = $_REQUEST["dni"];

$consulta = "UPDATE clases SET dia='$dia',hora='$hora',sala='$sala',materia='$materia',dniAlumno='$dni' where id='$id';";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "No se ha podido ejecutar la modificacion de este registro.";
    echo "<br><a href='formulario_modificar.php'>Volver a el formulario de modificacion</a>";
    echo "<br><a href='../mostrar_datos_clases.php'>Volver a el registro completo de clases</a>";
    echo "<br><a href='../index.html'>Volver al index</a>";
} elseif (!$error) {
    echo "Registro modificado correctamente";
    echo "<br><a href='../mostrar_datos_clases.php'>Volver a el registro completo de clases</a>";
    echo "<br><a href='../index.html'>Volver al index</a>";
}
