
<?php
if (is_numeric($_REQUEST["base"]) && is_numeric($_REQUEST["altura"]) )
   
   {
    

    if (isset($_REQUEST["area"]))
   	 { $area = $_REQUEST["base"] * $_REQUEST["altura"];
       echo("El área del romboide es: $area<br>");
      }
    if (isset($_REQUEST["perimetro"]))
      { $perimetro = 2*$_REQUEST["base"] + 2*$_REQUEST["altura"];
        echo("El perimetro del romboide es: $perimetro<br>");
      }  
   }
 else
 	echo ("Error en los datos de entrada <br>");

echo ("<p><a href='formromboide.html'>Atras</a></p>");

 ?>
