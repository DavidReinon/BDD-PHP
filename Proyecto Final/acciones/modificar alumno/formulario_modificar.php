<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$dni = $_POST['dni'];
$consulta = "SELECT * FROM alumnos WHERE dni='$dni';";

$datos_consulta = ErrorConsulta($mysqli, $consulta);
$resultado = $datos_consulta["resultado"];
$error = $datos_consulta["bool"];

$fila = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Datos del ALUMNO</title>
</head>

<body>
    <h1>Parametros a actualizar</h1>
    <form name="formModificar" method="post" action="modificar_alumno.php">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" maxlength="9" value="<?php echo $fila['dni']; ?>" style="background-color: #39C726;" readonly />

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $fila['nombre']; ?>" />

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" value="<?php echo $fila['apellidos']; ?>" />

        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono" maxlength="9" value="<?php echo $fila['telefono']; ?>" />

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $fila['fechaNacimiento']; ?>" />
        <p>
        <p>
            <input type="submit" name="ModificarAlumno" id="ModificarAlumno" value="Modificar Alumno" />
        </p>
    </form>