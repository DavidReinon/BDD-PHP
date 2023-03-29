<?php
session_start();
?>
<html>

<head>
    <title></title>
</head>

<body>

    <?php
    echo "Nombre de usuario: " . $_SESSION["usuario"] . "<br>";
    echo "Clave del usuario: " . $_SESSION["clave"] . "<br>";
    ?>

    <br>

</body>

</html>