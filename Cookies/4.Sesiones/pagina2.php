<?php
session_start();
$_SESSION["usuario"] = $_REQUEST["campousuario"];
$_SESSION["clave"] = $_REQUEST["campoclave"];
?>
<html>

<head>
    <title></title>
</head>

<body>
    SE HAN CREADO LAS VBLES DE SESION
    <br>
    <a href="pg3.php">Ir a la otra página</a>
</body>

</html>