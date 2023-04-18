<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require "usargestiona.php";
$codigo = $_REQUEST["codigo"];

$consulta = "DELETE FROM productos WHERE codigoproducto='$codigo';";

if (!$resultado = $mysqli->query($consulta)) {
  echo "Lo sentimos. App falla<br>";
  echo "Error en $consulta <br>";
  echo "Num.error: " . $mysqli->errno . "<br>";
  echo "Error: " . $mysqli->error . "<br>";
  exit;
} else echo "<br>REGISTRO ELIMINADO<br>";
