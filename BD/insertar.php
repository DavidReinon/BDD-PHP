<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("usarGESTIONA.php");

$consulta = "INSERT INTO proveedores (codigoProveedor, nombreProveedor,direccionProveedor,
telefonoProveedor, ciudadProveedor, provinciaProveedor, emailProveedor)
VALUES ('PR1', 'ACEROS DUROS, S.A.', 'CL Piedras Blancas, 67', '919998877', 'Fuenlabrada', 'MADRID', 'ventas@acerosduros.org');";

echo $consulta . "<br>";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}

$consulta = "INSERT INTO productos (codigoProducto, descripcionProducto,
codigoProveedorProducto, precioCompraProducto, precioVentaProducto, stockProducto)
VALUES ('T12', 'Tornillos del 12', 'PR1', 2.34, 5.15, 22000);";

echo $consulta . "<br>";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}

$consulta = "INSERT INTO productos (codigoProducto, descripcionProducto, codigoProveedorProducto,
precioCompraProducto, precioVentaProducto, stockProducto) VALUES
('T22', 'Tornillos del 22', 'PR1', 4.24, 6.15, 15000);";

echo $consulta . "<br>";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}
