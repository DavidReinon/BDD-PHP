<!-- TONI RUIZ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Documento sin titulo</title>
  <style type="text/css">
    #form1 p {
      font-family: Arial Black, Gadget, sans-serif;
    }

    #form1 table {
      font-family: Tahoma, Geneva, sans-serif;
    }
  </style>
</head>

<body>
  <?php

  if (isset($_REQUEST["limite"])) {

    define("a", 9.78); //aceleracion de la gravedad
    $limite = $_REQUEST["limite"];

    if (is_numeric($limite)) {
      /* El bucle comienza aqui. */
      for ($tiempo = 1; $tiempo <= $limite; $tiempo++) {
        $distancia = 0.5 * a * $tiempo * $tiempo;
        echo ("La distancia despues de $tiempo segundos es de $distancia metros <br>");
      }

      /* El bucle termina aqui. */
      echo ("Fin del bucle.");
    } else echo ("El limite no es numerico");
    echo ("<br>");
    echo ("<a href='caida_libre_AUTOPROC.php'>Volver al formulario</a>");
  } else { //No hay vbles POST y por tanto mostraremos el formulario
  ?>

    <h1>CAIDA LIBRE DE UN CUERPO
    </h1>
    <p><img src="caidalibre.jpg" width="259" height="194" /></p>
    <form id="form1" name="form1" method="post" action="caida_libre_AUTOPROC.php">
      <p>
        <label for="limite">Limite:</label>
        <input type="text" name="limite" id="limite" />
      </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
        <input type="reset" name="borrar" id="borrar" value="Restablecer" />
      </p>
    </form>
  <?php
  }
  ?>
</body>

</html>