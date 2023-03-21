<?php

class Empleado
{
    private $nombre;
    private $sueldo;
    private $veces_impreso;

    public function __construct($nom, $sue = 1000)
    {
        $this->nombre = $nom;
        $this->sueldo = $sue;
        $this->veces_impreso = 0;
    }

    public function imprimir()
    {
        echo $this->nombre . " sueldo:" . $this->sueldo;
        echo "<br>";
        $this->incrementa();
    }

    public function pagaImpuestos()
    {
        echo $this->nombre;
        echo "-";
        if ($this->sueldo > 3000) {
            echo "Debes pagar impuestos";
        } else {
            echo "No debes pagar impuestos";
        }
        echo "<br>";
    }

    private function incrementa()
    {
        $this->veces_impreso++;
    }

    public function cuantasVeces()
    {
        echo "Las veces que se ha impreso" . $this->nombre . "han sido" . $this->veces_impreso . "<br>";
    }
}

$empleado1 = new Empleado("Tonet");
$empleado1->imprimir();
$empleado1->pagaImpuestos();
$empleado1->cuantasVeces();
$empleado1->imprimir();
$empleado1->cuantasVeces();
