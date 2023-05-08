<?php
require("conexion_BD.php");

$consulta = "SELECT * FROM clases;";
$resultado = ErrorConsulta($mysqli, $consulta);

$columns = mysqli_fetch_fields($resultado);

echo "<table border = 1>";
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
    echo "</tr>";
}

echo "</table>";
