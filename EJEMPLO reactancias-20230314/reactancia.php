<?php

require("funcelectricas.php");

$frecuencia=$_REQUEST["frecuencia"];
$capacidad=$_REQUEST["capacidad"];
$inductancia=$_REQUEST["inductancia"];

if (isset($_REQUEST["capacitiva"]))
{
  if (is_numeric($frecuencia) && is_numeric($capacidad))
  {
    $xc=react_capacitiva($frecuencia,$capacidad);
    echo "La React.Capacitiva es $xc ohmios<br>";
  }
  else echo "Faltan valores de entrada o son erróneos<br>";

}
if (isset($_REQUEST["inductiva"]))
 {
   if (is_numeric($frecuencia) && is_numeric($inductancia))
   {
    $xl=react_inductiva($frecuencia,$inductancia);
    echo "La React.Inductiva es $xl ohmios<br>"; 
   }
  else echo "Faltan valores de entrada o son erróneos<br>";
}
echo("<br><br><a href='reactancia.html'>Volver al formulario</a>"); 
?>
