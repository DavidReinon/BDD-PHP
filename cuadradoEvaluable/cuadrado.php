<!-- David Reinon Garcia -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin titulo</title>

</head>

<body>
    <?php

    if (isset($_REQUEST["limite"])) {
        $limite = $_REQUEST["limite"];
        if (is_numeric($limite)) {
            if ($limite > 24 || $limite < 2) {
                echo ("El limite no se puede pasar de 24 ni ser menor que 2");
            } else {
                for ($i = 1; $i <= $limite; $i++) {
                    for ($j = 1; $j <= $limite; $j++) {
                        echo ("*");
                    }
                    echo ("<br>");
                }
            }
        } else echo ("El limite no es numerico");
        echo ("<br>");
        echo ("<a href='cuadrado.php'>Volver al formulario</a>");
    } else {
    ?>

        <h1>Dibujo de cuadrado con asteriscos</h1>
        <form id="form1" name="form1" method="post" action="cuadrado.php">
            <p>
                <label for="limite">Limite del cuadrado (min 2 y max 24):</label>
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