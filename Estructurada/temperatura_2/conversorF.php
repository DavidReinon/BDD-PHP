<?php


if (is_numeric($_REQUEST["celsius"]))
{    
  $celsius=$_REQUEST["celsius"];

  echo("El valor de la temperatura elegida en celsius es: $celsius<br>");
  $farenheit = (9.0/5.0)* $celsius + 32;
  echo("El valor de la temperatura elegida en farenheit es: $farenheit<br>");
}
else echo "Valores de entrada erróneos" ;

echo "<a href='formconversor.html'>Volver</a>"; 
?>