<?php

class persona
{
    protected $nombre;
    protected $edad;

    public function __construct($nom, $ed)
    {
        $this->nombre = $nom;
        $this->edad = $ed;
    }

    public function imprimirDatos()
    {
        echo "Nombre: $this->nombre / Edad: $this->edad";
    }
}

class empleadillo extends persona
{
    protected $sueldo;

    public function cargarsueldo($sue)
    {
        $this->sueldo = $sue;
    }

    public function imprimir_sueldo()
    {
        echo "$this->nombre tiene un sueldo de: $this->sueldo";
        echo "<br>";
    }
}
