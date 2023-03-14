<?php
function chequeo ()
{
    $numArgumentos=func_num_args();
    echo "Numeoro de argumentos: $numArgumentos <BR>";
    for ($i=0;$i<$numArgumentos;$i++)
    {
        $argumento=func_get_arg($i);
        echo "Argumento $i: $argumento <BR>";
    }

    $matrizargs=func_get_args();
    for ($i=0;$i<$numArgumentos;$i++)
    {
        $argumento=$matrizargs[$i];
        echo "Argumento $i: $argumento <BR>";
    }
}
$v1=0;
$v2="Hola";
chequeo($v1,$v2);
