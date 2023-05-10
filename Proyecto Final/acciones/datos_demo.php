<?php
mysqli_report(MYSQLI_REPORT_ERROR);
require("conexion_BD.php");

$consulta = "INSERT INTO alumnos (dni, nombre, apellidos, telefono, fechaNacimiento) VALUES
('11111111A', 'Juan', 'García Pérez', '910118877', '1990-01-01'),
('22222222B', 'María', 'González López', '919998877', '1991-01-01'),
('33333333C', 'Luis', 'Rodríguez Gómez', '615678817', '1992-01-01'),
('44444444D', 'Ana', 'García Pérez', '619698867', '1993-01-01'),
('55555555E', 'Antonio', 'González López', '930998077', '1994-01-01'),
('66666666F', 'Carmen', 'Rodríguez Gómez', '719998877', '1995-01-01'),
('77777777G', 'José', 'García Pérez', '915558877', '1996-01-01'),
('88888888H', 'Isabel', 'González López', '719998877', '1997-01-01'),
('99999999I', 'Javier', 'Rodríguez Gómez', '619995877', '1998-01-01'),
('00000000J', 'Laura', 'García Pérez', '612398877', '1998-01-01');";
echo $consulta . "<br><br>";

if (!ErrorConsulta($mysqli, $consulta)["bool"]) {
    echo $consulta . "<br><br>";
}

$consulta = "INSERT INTO clases (id, dia, hora, sala, materia, dniAlumno) VALUES
(1, '2018-05-19', '10:00:00', 'A1', 'Matemáticas', '11111111A'),
(2, '2018-10-04', '11:00:00', 'A2', 'Castellano', '22222222B'),
(3, '2018-12-10', '12:00:00', 'A1', 'Sociales', '33333333C'),
(4, '2019-02-14', '13:00:00', 'A5', 'Naturales', '44444444D'),
(5, '2019-06-20', '14:00:00', 'B3', 'Matemáticas', '55555555E'),
(6, '2019-07-01', '15:00:00', 'B2', 'Matemáticas', '66666666F'),
(7, '2020-08-25', '16:00:00', 'B4', 'Fisica y quimica', '77777777G'),
(8, '2020-11-09', '17:00:00', 'A1', 'Valenciano', '88888888H'),
(9, '2020-12-31', '18:00:00', 'A1', 'Ingles', '99999999I'),
(10, '2021-04-03', '19:00:00', 'B1', 'Sociales', '00000000J'),
(11, '2021-05-15', '10:00:00', 'B7', 'Castellano', '11111111A'),
(12, '2021-08-07', '11:00:00', 'A7', 'Ingles', '22222222B'),
(13, '2022-03-22', '12:00:00', 'A6', 'Valenciano', '33333333C'),
(14, '2022-04-02', '13:00:00', 'A1', 'Valenciano', '44444444D'),
(15, '2022-06-02', '14:00:00', 'A1', 'Matemáticas', '55555555E');";

if (!ErrorConsulta($mysqli, $consulta)["bool"]) {
    echo $consulta . "<br><br>";
}
