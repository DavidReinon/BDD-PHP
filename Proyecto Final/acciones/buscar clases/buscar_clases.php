<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mostrar_datos_tabla.css">
    <title>Busqueda de CLASES</title>
</head>

<body>
    <h1>Datos de CLASES</h1>
    <form action="../insert clase/crear_clase.html">
        <button type="submit">Crear Nueva Clase</button>
        <button type="submit" formaction="../mostrar_datos_clases.php">Volver a lista Completa</button>
    </form>
    <h2>Consultar clases con parametros</h2>
    <form name="formBuscar" method="post" action="buscar_clases.php">
        <p>
            <label for="dia">Dia:</label>
            <input type="date" name="dia" id="dia" />

            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" />

            <label for="sala">Sala:</label>
            <input type="text" name="sala" id="sala" />
        </p>
        <p>
            <label for="materia">Materia:</label>
            <input type="text" name="materia" id="materia" />

            <label for="DNI Alumno">DNI Alumno:</label>
            <input type="text" maxlength="9" name="dni" id="dni" />
        </p>
        <p>
            <input type="submit" name="Buscar Clases" id="alta" value="Buscar Clases" />
        </p>
    </form>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR);
    require("../conexion_BD.php");

    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $sala = $_POST['sala'];
    $materia = $_POST['materia'];
    $dni = $_POST['dni'];

    $consulta = "SELECT * FROM clases WHERE 1=1";
    $mostrarInfo = "PARAMETROS DE BUSQUEDA: ";

    if (!empty($dia)) {
        $consulta .= " AND dia = '$dia'";
        $mostrarInfo .= "| Dia: $dia |";
    }

    if (!empty($hora)) {
        $consulta .= " AND hora = '$hora'";
        $mostrarInfo .= "| Hora: $hora |";
    }

    if (!empty($sala)) {
        $sala = ucwords(iconv('UTF-8', 'ASCII//TRANSLIT', strtolower($sala)));
        $consulta .= " AND sala = '$sala'";
        $mostrarInfo .= "| Sala: $sala |";
    }

    if (!empty($materia)) {
        $materia = ucwords(iconv('UTF-8', 'ASCII//TRANSLIT', strtolower($materia)));
        $consulta .= " AND materia = '$materia'";
        $mostrarInfo .= "| Materia: $materia |";
    }

    if (!empty($dniAlumno)) {
        $consulta .= " AND dniAlumno = '$dni'";
        $mostrarInfo .= "| DNI Alumno: $dni |";
    }

    $datos_consulta = ErrorConsulta($mysqli, $consulta);
    $resultado = $datos_consulta["resultado"];

    if ($resultado && mysqli_affected_rows($mysqli) == 0) {
        echo "<h4>No hay clases con estos parametros asignados.
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
    echo "</tr>";
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['dia'] . "</td>";
        echo "<td>" . $fila['hora'] . "</td>";
        echo "<td>" . $fila['sala'] . "</td>";
        echo "<td>" . $fila['materia'] . "</td>";
        echo "<td>" . $fila['dniAlumno'] . "</td>";
        echo "<td> <button type='submit' formaction=''>Editar</button>";
        echo "<p> <button type='submit' formaction=''>Eliminar</button> <p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
</body>

</html>