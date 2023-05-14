<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Busqueda de CLASES</title>
</head>

<body>
    <h1>Datos de CLASES</h1>
    <form action="../insert clase/crear_clase.html">
        <button type="submit">Nueva Clase</button>
        <button type="submit" formaction="../mostrar_datos_clases.php">Volver Lista</button>
    </form>
    <a href='../../Index.html'><button type="submit">Volver Index</button></a>
    <h2>Consultar clases con parametros</h2>
    <form name="formBuscar" method="post" action="buscar_clase.php">
        <p>
        <h3>Clases:</h3>
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
    mysqli_report(MYSQLI_REPORT_ERROR);
    require("../conexion_BD.php");

    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $sala = $_POST['sala'];
    $materia = $_POST['materia'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $consulta = "SELECT c.*, a.nombre, a.apellidos FROM clases c 
    INNER JOIN alumnos a ON c.dniAlumno = a.dni WHERE 1=1";
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
        $sala = ucwords($sala);
        $consulta .= " AND sala = '$sala'";
        $mostrarInfo .= "| Sala: $sala |";
    }

    if (!empty($materia)) {
        $materia = ucwords($materia);
        $consulta .= " AND materia = '$materia'";
        $mostrarInfo .= "| Materia: $materia |";
    }

    if (!empty($dni)) {
        $consulta .= " AND dniAlumno = '$dni'";
        $mostrarInfo .= "| DNI: $dni |";
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
        formaction='../eliminar clase/confirmacion_eliminar_clase.php'>Eliminar</button><p>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    ?>
</body>

</html>