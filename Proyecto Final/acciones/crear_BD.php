<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
ErrorConexion($mysqli);

$database = "academia";
$consulta = "CREATE DATABASE IF NOT EXISTS $database;";
ErrorConsulta($mysqli, $consulta);

$mysqli->select_db($database);

$consulta = "CREATE TABLE IF NOT EXISTS alumnos ";
$consulta .= "(dni CHAR(9),";
$consulta .= "nombre VARCHAR(45) NOT NULL, ";
$consulta .= "apellidos VARCHAR(45), ";
$consulta .= "telefono CHAR(9) NOT NULL, ";
$consulta .= "fechaNacimiento DATE, ";
$consulta .= "PRIMARY KEY (dni)); ";
ErrorConsulta($mysqli, $consulta);

$consulta = "CREATE TABLE IF NOT EXISTS clases ";
$consulta .= "(id INT AUTO_INCREMENT,";
$consulta .= "dia DATE NOT NULL, ";
$consulta .= "hora TIME NOT NULL, ";
$consulta .= "sala VARCHAR(45), ";
$consulta .= "materia VARCHAR(45), ";
$consulta .= "dniAlumno CHAR(9) NOT NULL, ";
$consulta .= "ADD CONSTRAINT fk_clases_alumnos 
FOREIGN KEY (dniAlumno) REFERENCES alumnos(dni) ON DELETE CASCADE, ";
$consulta .= "PRIMARY KEY (id)); ";
ErrorConsulta($mysqli, $consulta);
