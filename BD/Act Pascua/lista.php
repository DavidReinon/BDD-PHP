<?php

/*Desarrollar el código PHP/HTML que permita desplegar un control tipo lista en un formulario
que se cargue con los nombres de los productos y su código */

mysqli_report(MYSQLI_REPORT_ERROR);
require("usarGESTIONA.php");
$consulta = "SELECT codigoproducto, descripcionproducto FROM productos;";

if (!$resultado = $mysqli->query($consulta)) {
    echo "Lo sentimos. La app falla.<br>";
    echo "Error en: " . $consulta . "<br>";
    echo "Num.Error: " . $mysqli->errno . "<br>";
    echo "Error: " . $mysqli->error . "<br>";
    exit;
}
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
    <h1>Acceso a BBDD para desplegar VALORES</h1>
    <form>
        <p>Nombre Producto/Codigo:</p>
        <p>
            <select name="Productos">
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<option>" . $fila['descripcionproducto'] . "/" . $fila['codigoproducto'] . "</option>";
                }
                ?>
        </p>
        </select>
    </form>
</body>

</html>