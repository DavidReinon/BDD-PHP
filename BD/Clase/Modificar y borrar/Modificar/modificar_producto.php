<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Documento sin título</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="accion_modificar.php">
    <p>MODIFICADO DE PRODUCTO
    </p>
    <p>
      <label for="codigo">CODIGO PRODUCTO:</label>
      <input type="text" name="codigo" id="codigo" readonly="readonly" value="<?php echo ($_REQUEST['listado']); ?>" />
    </p>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR);
    require("usargestiona.php");
    $cod = $_REQUEST['listado'];
    $consulta = "SELECT * FROM productos WHERE codigoproducto='$cod';";

    if (!$resultado = $mysqli->query($consulta)) {
      echo "Lo sentimos. App falla<br>";
      echo "Error en $consulta <br>";
      echo "Num.error: " . $mysqli->errno . "<br>";
      echo "Error: " . $mysqli->error . "<br>";
      exit;
    }
    while ($fila = $resultado->fetch_assoc()) {
      echo "<p><label for='descripcion'>Descripcion</label>
    <input type='text' name='descripcion' id='descripcion' value='" . $fila['descripcionproducto'] . "'/>  </p>";

      echo "<p><label for='proveedor'>Proveedor</label>
    <input type='text' name='proveedor' id='proveedor' value='" . $fila['codigoproveedorproducto'] . "'   />  </p>";

      echo "<p><label for='preciocompra'>Preciocompra</label>
    <input type='text' name='preciocompra' id='preciocompra' value='" . $fila['preciocompraproducto'] . "'   />  </p>";

      echo "<p><label for='precioventa'>Precioventa</label>
    <input type='text' name='precioventa' id='precioventa' value='" . $fila['precioventaproducto'] . "'   />  </p>";

      echo "<p><label for='stock'>Stock</label>
    <input type='text' name='stock' id='stock' value='" . $fila['stockproducto'] . "'   />  </p>";
    }
    ?>
    <p>
      <input type="submit" name="MODIFICAR" id="MODIFICAR" value="Modificar registro" />
    </p>
  </form>
</body>

</html>