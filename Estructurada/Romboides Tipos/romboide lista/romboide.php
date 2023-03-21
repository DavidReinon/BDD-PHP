
<?php
if (is_numeric($_REQUEST["base"]) && is_numeric($_REQUEST["altura"]) )
{  
 $elegido=$_REQUEST["lista"];   
  
    if ($elegido==1)
    {
      $perimetro = 2*$_REQUEST["base"] + 2*$_REQUEST["altura"];
      echo("El perimetro del romboide es: $perimetro<br>");
    }

    else if ($elegido==2)
    {
     $area = $_REQUEST["base"] * $_REQUEST["altura"];
     echo("El área del romboide es: $area<br>");
    } 
   
}
 else
 	echo ("Error en los datos de entrada <br>");

echo ("<p><a href='formromboide.html'>Atras</a></p>");

 ?>
