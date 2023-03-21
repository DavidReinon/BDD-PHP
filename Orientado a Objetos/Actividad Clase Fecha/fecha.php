<?php
class fecha
{
    protected $dia;
    protected $mes;
    protected $anyo;

    public function __construct($di = 01, $me = 01, $any = 2020)
    {
        $this->dia = $di;
        $this->mes = $me;
        $this->anyo = $any;
    }

    public function establecerFecha($di, $me, $any)
    {
        $this->dia = $di;
        $this->mes = $me;
        $this->anyo = $any;
    }

    public function mostrarFecha()
    {
        echo "$this->dia / $this->mes / $this->anyo<br>";
    }
}

$fecha1 = new Fecha(31, 12, 2022);
echo "-----------Fecha de inicio------------<br>";
$fecha1->mostrarFecha();

echo "-----------Fecha de fin------------<br>";
$fecha1->establecerFecha(20, 2, 2021);
$fecha1->mostrarFecha();
