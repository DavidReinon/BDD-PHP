<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
if (isset($_COOKIE["idioma"]))
{
  if ($_COOKIE["idioma"]=="sp")
     header ("Location:pagesp.html");
  elseif ($_COOKIE["idioma"]=="eng") 
     header ("Location:pageng.html");
}

else{
?>

<form id="form1" name="form1" method="post" action="elegiridioma.php">
  <p>SELECCIÓN DE IDIOMA</p>
  <p>
    <input name="radio" type="radio" id="radio" value="sp" checked="checked" />
    <label for="radio">Español</label>
  </p>
  <p>
    <input type="radio" name="radio" id="radio2" value="eng" />
    <label for="radio2">English</label>
  </p>
  <p>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
  </p>
</form>
<?php } ?>
</body>
</html>