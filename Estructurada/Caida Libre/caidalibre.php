 <?php

  define("g", 9.78);
  if (is_numeric($_REQUEST["limite"])) {
    $limite = $_REQUEST["limite"];

    for ($tiempo = 1; $tiempo <= $limite; $tiempo++) {
      $distancia = 0.5 * g * $tiempo * $tiempo;
      echo "Coyote ha recorrido $distancia metros en el segundo $tiempo <br>";
    }
  } else echo "No es numérico el límite <br>";


  echo ("<br><br><a href='caidalibre.html'>Volver al formulario</a>");
  ?>  
