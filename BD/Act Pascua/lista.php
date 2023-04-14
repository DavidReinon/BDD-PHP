<?php
/*Desarrollar el código PHP/HTML que permita desplegar un control tipo lista en un formulario
que se cargue con los nombres de los productos y su código */
mysqli_report(MYSQLI_REPORT_ERROR);
require("usarGESTIONA.php");
$consulta = "SELECT * FROM productos;";
if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}
echo "<br>";
