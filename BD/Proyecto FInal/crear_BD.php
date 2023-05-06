<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("funciones.php");

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
ErrorConexion($mysqli);

$baseDatos = "academia";
$consulta = "CREATE DATABASE IF NOT EXISTS $baseDatos;";
ErrorConsulta($mysqli, $consulta);

$mysqli->select_db($basedatos);

$consulta = "CREATE TABLE IF NOT EXISTS alumnos ";
$consulta .= "(dni CHAR(9),";
$consulta .= "nombre VARCHAR(45), ";
$consulta .= "apellidos VARCHAR(45), ";
$consulta .= "telefono CHAR(9), ";
$consulta .= "fechaNacimiento DATE, ";
$consulta .= "PRIMARY KEY (dni)); ";
ErrorConsulta($mysqli, $consulta);

$consulta = "CREATE TABLE IF NOT EXISTS clases ";
$consulta .= "(id INT AUTO_INCREMENT,";
$consulta .= "dia DATE, ";
$consulta .= "hora TIME, ";
$consulta .= "sala VARCHAR(45), ";
$consulta .= "materia VARCHAR(45) NOT NULL, ";
$consulta .= "dniAlumno CHAR(9), ";
$consulta .= "FOREIGN KEY (dniAlumno) REFERENCES alumnos(dni), ";
$consulta .= "PRIMARY KEY (id)); ";
ErrorConsulta($mysqli, $consulta);
