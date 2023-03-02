<?php
define("PI", 3.14);
echo "El valor de PI es:" .PI. "<br>";

$op1 = 8;
$op2 = "prueba";
echo "Mi primer operando op1 es " . gettype($op1) . " <br>";
echo "Mi segundo operando op2 es " . gettype($op2) . " <br>";

settype($op1, "string");
echo "Mi primer operando op1 es " . gettype($op1) . " <br>";

$op1 .= "23";
echo $op1;
settype($op1, "double");
echo "<br>" . $op1;

echo " <br> Isset() sobre op1 es " . isset($op1) . " <br>";
unset($op1);
echo "Isset() sobre op1 es " . isset($op1) . " <br>";

$op1 = 21;
echo "<br> Igual que el isset:";
echo "<br> Devuelve 1 si es numerico, si no no devuelve nada: " . is_numeric($op1);
