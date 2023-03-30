<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
</head>

<body>
    <form id="form1" name="form1" method="post" action="cookies.php">
        <p>Fondo:</p>
        <p>
            <input type="radio" name="radio1" id="azul" value="azul" checked />
            <label for="azul">Azul</label>
        </p>
        <p>
            <input type="radio" name="radio1" id="rojo" value="rojo" />
            <label for="rojo">Rojo</label>
        </p>
        <p>
            <input type="radio" name="radio1" id="verde" value="verde" />
            <label for="verde">Verde</label>
        </p>
        <p>Letras:</p>
        <p>
            <input type="radio" name="radio2" id="azul" value="azul" checked />
            <label for="azul">Azul</label>
        </p>
        <p>
            <input type="radio" name="radio2" id="rojo" value="rojo" />
            <label for="rojo">Rojo</label>
        </p>
        <p>
            <input type="radio" name="radio2" id="verde" value="verde" />
            <label for="verde">Verde</label>
        </p>
        <p>
            <input type="submit" name="enviar" id="enviar" value="Seleccionar Colores" />
        </p>

    </form>
    <form id="form2" name="form2" method="post" action="cerrar.php">
        <p>
            <input type="submit" name="reset" id="reset" value="Resetear" />
        </p>
    </form>
    <p> Contador de visitas:
        <?php
        session_start();
        if (!isset($_SESSION['contador']))
            $_SESSION["contador"] = 0;
            
        echo $_SESSION["contador"];
        ?>
    </p>
</body>

</html>