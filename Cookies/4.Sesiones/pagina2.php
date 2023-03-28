<?php
session_start();
$_SESSION["usuario"] = $_REQUEST["usuario"];
$_SESSION["contra"] = $_REQUEST["contra"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Variables de sesion creadas.
    <a href="pagina3.php"> Vuelve </a>
</body>

</html>