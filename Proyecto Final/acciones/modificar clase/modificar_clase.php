<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");
echo "<link rel='stylesheet' href='../../css/styles.css' />";

$id = $_POST['id'];

$dia = $_POST["dia"];
$hora = $_POST["hora"];
$sala = $_POST["sala"];
$materia = $_POST["materia"];
$dni = $_POST["dni"];

$consulta = "UPDATE clases SET dia='$dia',hora='$hora',sala='$sala',materia='$materia',dniAlumno='$dni' 
where id='$id' 
AND NOT EXISTS (
    SELECT 1 FROM clases
    WHERE sala = '$sala' AND dia = '$dia' AND hora = '$hora'
);";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

if ($resultado && mysqli_affected_rows($mysqli) == 0) {
    echo "Ya existe una clase resgistrada con los datos que has introducido (Dia, hora o sala tienen que ser distintos)";
} elseif (!$error) {
    echo "Registro modificado correctamente";
}
echo "<br><a href='../mostrar_datos_clases.php'><button type='button'>Lista Clases</button></a>";
