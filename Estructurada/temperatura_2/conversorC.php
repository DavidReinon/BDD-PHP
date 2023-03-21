<?php
 

if (is_numeric($_REQUEST["farenheit"]))
{    
  $farenheit=$_REQUEST["farenheit"];


  echo("El valor de la temperatura elegida en Farenheit es: $farenheit<br>");
  $celsius = (5.0/9.0) * ($farenheit -32) ;
  echo("El valor de la temperatura elegida en celsius es: $celsius<br>");
 
}
else echo "Valores de entrada erróneos" ;

echo "<a href='formconversor.html'>Volver</a>"; 
?>