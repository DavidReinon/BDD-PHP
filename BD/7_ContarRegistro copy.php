<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="200" border="1">
        <tr>
            <td>Codigo</td>
            <td>Descripción</td>
            <td>P.Compra</td>
        </tr>

        <?php
        mysqli_report(MYSQLI_REPORT_ERROR);
        require("usarGESTIONA.php");

        $consulta = "SELECT * FROM productos where precioCompraProducto<15.00;";

        if (!$resultado = $mysqli->query($consulta)) {
            echo "Lo sentimos. La app falla.<br>";
            echo "Error en: " . $consulta . "<br>";
            echo "Num.Error: " . $mysqli->errno . "<br>";
            echo "Error: " . $mysqli->error . "<br>";
            exit;
        }
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['codigoproducto'] . "</td>";
            echo "<td>" . $fila['descripcionproducto'] . "</td>";
            echo "<td>" . $fila['preciocompraproducto'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>