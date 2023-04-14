<?php
/*Desarrollar el código PHP/HTML que permita desplegar un control tipo lista en un formulario
que se cargue con los nombres de los productos y su código */
mysqli_report(MYSQLI_REPORT_ERROR);
require("usarGESTIONA.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Desplegable</title>
</head>

<body>
    <p>Elige un color:
        <select name="color">
            <option>rojo</option>
            <option>amarillo</option>
            <option>verde</option>
            <option>azul</option>
        </select>
    </p>
</body>

</html>