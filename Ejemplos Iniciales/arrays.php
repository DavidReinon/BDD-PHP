<?php
$amigo = array(
    "nombre" => "Pedro", "direccion" => "Colon, Num.3",
    "telefono:" => "554354"
);

echo $amigo["nombre"] . "<br>";

$amigos = array(
    array("nombre" => "Pedro", "direccion" => "Colon, Num.3", "telefono:" => "3535435"),
    array("nombre" => "PEPE", "direccion" => "Calle SIUU, Num.6", "telefono:" => "395740")
);

echo $amigos[1]["nombre"]. " - " .$amigos[1]["direccion"];
