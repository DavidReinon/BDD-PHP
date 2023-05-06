<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("3_usarGESTIONA.php");

$consulta = "SELECT * FROM productos where precioCompraProducto<15.00;";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}
echo "<br>";
$numeroderegsitros = $resultado->num_rows;
echo "El número de registros es: " . $numeroderegsitros . "<br>";
