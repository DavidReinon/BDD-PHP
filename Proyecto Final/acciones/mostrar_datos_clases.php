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
    <link rel="stylesheet" href="css/mostrar_datos_tabla.css">
    <title>Datos de CLASES</title>
</head>

<body>
    <h1>Datos de CLASES</h1>
    <form action="insert clase/crear_clase.html">
        <button type="submit">Crear Nueva Clase</button>
    </form>
    <h2>Consultar clases con parametros</h2>
    <form name="formBuscar" method="post" action="buscar clase/buscar_clase.php">
        <p>
        <h3>Clases:</h3>
        <label for="dia">Dia:</label>
        <input type="date" name="dia" id="dia" />

        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" />

        <label for="sala">Sala:</label>
        <input type="text" name="sala" id="sala" />

        <label for="materia">Materia:</label>
        <input type="text" name="materia" id="materia" />
        </p>
        <p>
        <h3>Alumnos:</h3>
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
        echo "<td> <button type='submit' formaction=''>Editar</button>";
        echo "<p> <button type='submit' value='" . $idClase . "' 
        formaction='eliminar clase/eliminar_clase.php'>Eliminar</button><p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
</body>

</html>