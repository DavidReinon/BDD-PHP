<?php
require("conexion_BD.php");

$consulta = "SELECT c.*, a.nombre, a.apellidos FROM clases c 
INNER JOIN alumnos a ON c.dniAlumno = a.dni;";
$resultado = ErrorConsulta($mysqli, $consulta)["resultado"];

$columns = mysqli_fetch_fields($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Lista de CLASES</title>
</head>

<body>
    <h1>Lista de CLASES</h1>
    <form action="insert clase/crear_clase.html">
        <button type="submit">Nueva Clase</button>
    </form>
    <a href='../index.html'><button type="submit">Volver Index</button></a>
    <h2>Buscar por parametros</h2>
    <form name="formBuscar" method="post" action="buscar clase/buscar_clase.php">
        <p>
        <h3>Datos Clase:</h3>
        <label for="dia">Dia:</label>
        <input type="date" name="dia" id="dia" />

        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" />

        <label for="sala">Sala:</label>
        <input type="text" name="sala" id="sala" maxlength="2" />

        <label for="materia">Materia:</label>
        <input type="text" name="materia" id="materia" />
        </p>
        <p>
        <h3>Datos Alumno Asignado:</h3>
        <label for="dni">DNI:</label>
        <input type="text" maxlength="9" name="dni" id="dni" />

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" />

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" />
        </p>
        <p>
            <input type="submit" name="Buscar Clases" id="alta" value="Buscar Clases" />
        </p>
    </form>
    <?php
    echo "<form method='post'>";
    echo "<table>";
    echo "<tr>";
    foreach ($columns as $column) {
        echo "<th>" . $column->name . "</th>";
    }
    echo "<th>Acciones</th>";
    echo "</tr>";
    while ($fila = mysqli_fetch_array($resultado)) {
        $idClase = $fila['id'];
        echo "<tr>";
        echo "<td>" . $idClase . "</td>";
        echo "<td>" . $fila['dia'] . "</td>";
        echo "<td>" . $fila['hora'] . "</td>";
        echo "<td>" . $fila['sala'] . "</td>";
        echo "<td>" . $fila['materia'] . "</td>";
        echo "<td>" . $fila['dniAlumno'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td> <button id='btn-editar' type='submit' name='id' value='" . $idClase . "' 
        formaction='modificar clase/formulario_modificar.php'>Editar</button>";
        echo "<p> <button id='btn-eliminar' type='submit' name='id' value='" . $idClase . "' 
        formaction='eliminar clase/confirmacion_eliminar_clase.php'>Eliminar</button><p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
</body>
</html>