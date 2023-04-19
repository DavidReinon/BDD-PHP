<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Documento sin título</title>
</head>

<body>
  <p>acceso a la BBDD para borrar REGISTROS</p>
  <form id="form1" name="form1" method="post" action="borrar_producto.php">
    <p>
      <label for="listado">Piezas :</label>
      <select name="listado" size="1" id="listado">

        <?php
        mysqli_report(MYSQLI_REPORT_ERROR);
        require("usargestiona.php");
        $consulta = "SELECT codigoproducto, descripcionproducto FROM productos ;";
        $resultado = $mysqli->query($consulta);
        while ($fila = $resultado->fetch_assoc()) {
          $n = $fila["descripcionproducto"];
          echo ("<option value=" . $fila['codigoproducto'] . ">" . $n . "</option>");
        }
        ?>
      </select>
    </p>
    <p><input type="radio" name="seleccion" id="Modificar" value="Modificar">
      <label for="Modificar">Modificar</label><br>
    </p>
    <p><input type="radio" id="Borrar" name="seleccion" value="Borrar">
      <label for="Borrar">Borrar</label><br>
    </p>
    <p>
      <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </p>

  </form>
</body>

</html>