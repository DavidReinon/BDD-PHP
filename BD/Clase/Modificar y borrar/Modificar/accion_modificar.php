<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require "usargestiona.php";
$codigo = $_REQUEST["codigo"];
$descripcion = $_REQUEST["descripcion"];
$proveedor = $_REQUEST["proveedor"];
$preciocompra = $_REQUEST["preciocompra"];
$precioventa = $_REQUEST["precioventa"];
$stock = $_REQUEST["stock"];


$consulta = "UPDATE productos SET descripcionproducto='$descripcion',codigoproveedorproducto='$proveedor',
preciocompraproducto='$preciocompra', precioventaproducto='$precioventa', stockproducto='$stock' where codigoproducto='$codigo';";


if (!$resultado = $mysqli->query($consulta)) {
  echo "Lo sentimos. App falla<br>";
  echo "Error en $consulta <br>";
  echo "Num.error: " . $mysqli->errno . "<br>";
  echo "Error: " . $mysqli->error . "<br>";
  exit;
} else echo "<br>REGISTRO MODIFICADO<br>";
