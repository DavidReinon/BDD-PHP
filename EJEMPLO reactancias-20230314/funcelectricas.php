<?php

define ("PI",3.14159);

function react_capacitiva($f,$c)
{
  $res=1/(2*PI*$f*$c);
  return $res;
}
function react_inductiva($f,$L)
{
  $res=2*PI*$f*$L;
  return $res;
}

?>
