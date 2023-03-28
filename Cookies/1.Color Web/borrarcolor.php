<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
</head>

<body>
    <?php
    setcookie("color", "#ffffff", time() + 60 * 60 * 24 * 365, "/");

    echo ("Color inicializado a blanco.");

    ?>

    <br>
    <a href="pagina1.php">Ir a la otra página</a>
</body>

</html>