<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
</head>

<body>
    <form id="form1" name="form1" method="post" action="setearcookie.php">
        <p>
            <label for="mailusuario">Ingrese email:</label>
            <input type="text" name="mailusuario" id="mailusuario" value="<?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail']; ?>" />
        </p>
        <p>
            <input type="radio" name="opcion" id="opcion" value="recordar" checked="checked" />
            <label for="opcion">Recordar email</label>
        </p>
        <p>
            <input type="radio" name="opcion" id="opcion2" value="norecordar" />
            <label for="opcion2">No Recuerdes</label>
        </p>
        <p>
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
        </p>
        <p>&nbsp;</p>
    </form>
</body>

</html>