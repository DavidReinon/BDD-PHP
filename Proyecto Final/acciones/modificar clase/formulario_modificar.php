<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$id = $_POST['id'];
$consulta = "SELECT c.*, a.nombre, a.apellidos FROM clases c 
    INNER JOIN alumnos a ON c.dniAlumno = a.dni WHERE id='$id';";

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
    <title>Datos de CLASES</title>
</head>

<body>
    <h2>Parametros a actualizar</h2>
    <form name="formBuscar" method="post" action="modificar_clase.php">
        <p>
            <label for="id">ID CLASE:</label>
            <input type="text" name="id" id="id" value="<?php echo $fila['id']; ?>" style="background-color: #39C726;" readonly />
        <h3>Datos Clase:</h3>

        <label for="dia">Dia:</label>
        <input type="date" name="dia" id="dia" value="<?php echo $fila['dia']; ?>" />

        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" value="<?php echo $fila['hora']; ?>" />

        <label for="sala">Sala:</label>
        <input type="text" name="sala" id="sala" value="<?php echo $fila['sala']; ?>" />

        <label for="materia">Materia:</label>
        <input type="text" name="materia" id="materia" value="<?php echo $fila['materia']; ?>" />
        </p>
        <p>
        <h3>Datos Alumno Asignado:</h3>
        
        <label for="dni">DNI:</label>
        <input type="text" maxlength="9" name="dni" id="dni" value="<?php echo $fila['dniAlumno']; ?>" />

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $fila['nombre']; ?>" style="background-color: #39C726;" readonly />

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" value="<?php echo $fila['apellidos']; ?>" style="background-color: #39C726;" readonly />
        </p>
        <p>Advertencia: En estos campos cambias el alumno registrado en la clase, no los datos del propio alumno.</p>
        <p>
            <input type="submit" name="Modificar Clase" id="modificar" value="Modificar clase" />
        </p>
    </form>