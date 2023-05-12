<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mostrar_datos_tabla.css">
    <title>Datos de ALUMNOS</title>
</head>

<body>
    <h1>Datos de ALUMNOS</h1>
    <form action="insert alumno/crear_alumno.html">
        <button type="submit">Nuevo Alumno</button>
    </form>
    <a href='../mostrar_datos_alumnos.php'><button type="submit">Volver Lista</button></a>
    <h2>Buscar ALUMNOS con parametros</h2>
    <form name="formBuscar" method="post" action="buscar clase/buscar_clase.php">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" maxlength="9" />

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" />

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" />

        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono" maxlength="9" />

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" />
        <p>
            <input type="submit" name="Buscar Clases" id="alta" value="Buscar Clases" />
        </p>
    </form>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR);
    require("../conexion_BD.php");

    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    $consulta = "SELECT * FROM alumnos WHERE 1=1";
    $mostrarInfo = "PARAMETROS DE BUSQUEDA: ";

    if (!empty($dni)) {
        $consulta .= " AND dni = '$dni'";
        $mostrarInfo .= "| Dni: $dni |";
    }

    if (!empty($nombre)) {
        $nombre = ucwords($nombre);
        $consulta .= " AND nombre = '$nombre'";
        $mostrarInfo .= "| Nombre: $nombre |";
    }

    if (!empty($apellidos)) {
        $apellidos = ucwords($apellidos);
        $consulta .= " AND apellidos = '$apellidos'";
        $mostrarInfo .= "| Apellidos: $apellidos |";
    }

    if (!empty($telefono)) {
        $consulta .= " AND telefono = '$telefono'";
        $mostrarInfo .= "| Telefono: $telefono |";
    }

    if (!empty($fechaNacimiento)) {
        $consulta .= " AND fechaNacimiento = '$fechaNacimiento'";
        $mostrarInfo .= "| Fecha de Nacimiento: $fechaNacimiento |";
    }

    $datos_consulta = ErrorConsulta($mysqli, $consulta);
    $resultado = $datos_consulta["resultado"];

    if ($resultado && mysqli_affected_rows($mysqli) == 0) {
        echo "<h4>No hay Alumnos con estos parametros asignados.
        Intentelo de nuevo o vuelva a la lista completa</h4>";
        exit();
    }

    $columns = mysqli_fetch_fields($resultado);

    echo "<h4 id='seleccion'>$mostrarInfo</h4>";
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
        formaction='../modificar alumno/formulario_modificar.php'>Editar</button>";
        echo "<p> <button type='submit' name='id' value='" . $dni . "' 
        formaction='../eliminar alumno/confirmacion_eliminar_alumno.php'>Eliminar</button><p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
</body>

</html>