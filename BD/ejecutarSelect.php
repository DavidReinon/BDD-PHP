<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("usarGESTIONA.php");

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$email = $_POST['email'];

$consulta = "INSERT INTO clientes (codigocliente, nombrecliente, direccioncliente,
telefonocliente, ciudadcliente, provinciacliente, emailcliente) VALUES
('$codigo','$descripcion','$direccion','$telefono','$ciudad','$provincia','$email');";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}
