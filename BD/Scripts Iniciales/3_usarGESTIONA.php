<?php
mysqli_report(MYSQLI_REPORT_ERROR);

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die("Salida del programa. Error acceso a BBDD");
} else echo "Se ha conectado al servidor MySQL<br>";

$basedatos = "gestiona";
$mysqli->select_db($basedatos);

$consulta = "CREATE TABLE IF NOT EXISTS proveedores ";
$consulta .= "(codigoproveedor CHAR(3),";
$consulta .= "nombreproveedor VARCHAR(40), ";
$consulta .= "direccionproveedor VARCHAR(80), ";
$consulta .= "telefonoproveedor VARCHAR(9), ";
$consulta .= "ciudadproveedor VARCHAR(40), ";
$consulta .= "provinciaproveedor VARCHAR(20), ";
$consulta .= "emailproveedor VARCHAR(80), ";
$consulta .= "PRIMARY KEY (codigoproveedor)); ";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}

$consulta = "CREATE TABLE IF NOT EXISTS productos ";
$consulta .= "(codigoproducto CHAR(3),";
$consulta .= "descripcionproducto VARCHAR(50), ";
$consulta .= "codigoproveedorproducto CHAR(3), ";
$consulta .= "preciocompraproducto float, ";
$consulta .= "precioventaproducto float, ";
$consulta .= "stockproducto int(11), ";
$consulta .= "PRIMARY KEY (codigoproducto), FOREIGN KEY (codigoproveedorproducto) REFERENCES proveedores(codigoproveedor));";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}
