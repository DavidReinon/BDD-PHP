<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
if (!isset($_REQUEST["valor_1"]))
  {
?>

<p>ESTO ES UNA PRUEBA DE ENTRADA DE DATOS CON FORMULARIO</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="valor_1">Primer valor:</label>
    <input type="text" name="valor_1" id="valor_1" />
  </p>
  <p>
    <label for="valor_2">Segundo valor:</label>
    <input type="text" name="valor_2" id="valor_2" />
  </p>
  <p>
    <label for="valor_3">Tercer valor:</label>
    <input type="text" name="valor_3" id="valor_3" />
  </p>
  <p>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
  </p>
</form>
<p>&nbsp;</p>

<?php
   } else {
    
    $v1 = $_REQUEST["valor_1"];

  echo ("El contenido del primer valor es: ".$v1." <br>");
  echo ("El contenido del segundo valor es: ".$_REQUEST["valor_2"]."<br>");
  echo ("El contenido del tercer valor es:". $_REQUEST["valor_3"]."<br>");
  $total= $v1+$_REQUEST["valor_3"];
  echo ("Resultado de sumar primer y tercer valor: $total <br>");



   }
?>


</body>
</html>
