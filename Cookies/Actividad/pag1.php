<?php

session_start();
$_SESSION["contador"] += 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body <?php if (isset($_COOKIE['colorLetra'])) echo " text=\"$_COOKIE[colorLetra]\"";
        if (isset($_COOKIE['colorFondo'])) echo " bgcolor=\"$_COOKIE[colorFondo]\"";
        ?>>
    <h1>TITULO DE LA PAGINA</h1>
    <p>Texto de la pagina Texto de la pagina Texto de la pagina Texto de la pagina Texto de la pagina Texto de la pagina Texto de la pagina Texto de la pagina </p>
    <a href="index.php"> Volver</a>
</body>

</html>