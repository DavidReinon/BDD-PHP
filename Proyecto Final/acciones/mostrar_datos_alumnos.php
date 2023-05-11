<?php
require("conexion_BD.php");

$consulta = "SELECT * FROM alumnos;";
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
    <title>Datos de ALUMNOS</title>
</head>

<body>
    <h1>Datos de ALUMNOS</h1>
    <form action="insert alumno/crear_alumno.html">
        <button type="submit">Nuevo Alumno</button>
    </form>
    <a href='../index.html'><button type="submit">Volver Index</button></a>
    <h2>Consultar ALUMNOS con parametros</h2>
    <form name="formBuscar" method="post" action="buscar clase/buscar_clase.php">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" maxlength="9"/>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" />

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" />

        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono" maxlength="9"/>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" />
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
        $dni = $fila['dni'];
        echo "<tr>";
        echo "<td>" . $dni . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['fechaNacimiento'] . "</td>";
        echo "<td> <button type='submit' name='id' value='" . $dni . "' 
        formaction='modificar clase/formulario_modificar.php'>Editar</button>";
        echo "<p> <button type='submit' name='id' value='" . $dni . "' 
        formaction='eliminar clase/confirmacion_eliminar_clase.php'>Eliminar</button><p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
</body>

</html>