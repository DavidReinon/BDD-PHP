<?php
session_start();

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
    <p>Recuperando variable de sesion</p>
    <?php
    echo "Nombre de usuario: " . $_SESSION['usuario'] . " / Clave:" . $_SESSION['contra'];
    echo "<br>";
    
    ?>
    <a href="pagina.html"> Vuelve </a>
</body>

</html>