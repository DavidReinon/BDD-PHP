<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("../conexion_BD.php");

$id=$_POST['id'];
$consulta = "DELETE FROM clases WHERE id = '$id'";