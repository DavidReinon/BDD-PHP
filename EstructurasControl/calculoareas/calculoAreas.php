<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
if (is_numeric($_REQUEST["longitud"]))
{
    $radio=$_REQUEST["radio"];
    $longitud=$_REQUEST["longitud"];
    define("PI",3.14159);
    echo("Este programa calcula el area de ");
	echo("un cuadrado o de un circulo.<br>");
	if ($radio == 2)
	{
		$area = PI * $longitud * $longitud;
		echo("Un circulo de radio $longitud tiene un area de ");
 		echo("$area unidades cuadradas.");
	}
	else
	if ($radio == 1)
	{
		
		$area = $longitud * $longitud;
		echo("Un cuadrado de longitud $longitud tiene un area de ");
 		echo("$area unidades cuadradas.");
	}
	else
	{
		echo("Eleccion incorrecta.<br>");
		echo("Debe ejecutar el programa de nuevo.<br>"); 
		
	}
	echo("<br><br>Aqui termina el programa que calcula ");
 	echo("el area de un circulo o un cuadrado.");
}
else
  {echo ("Falta dato para el calculo<br>");}

echo ("<a href='calculoAreas.html'>Volver</a>");
?>
</body>
</html>