<?php

$amigos = array(
    array(
        "nombre" => "Pedro",
        "direccion" => "C/Santos 22", "edad" => 34
    ),
    array(
        "nombre" => "Juan",
        "direccion" => "C/Colon 22", "edad" => 20
    ),
    array(
        "nombre" => "Ana",
        "direccion" => "C/Luisito 2", "edad" => 18
    )
);

$totalamigos = count($amigos);
echo "Solo tienes $totalamigos amiguetes<br>";

$verse = <<<HERE
<table width="200" border="1">
  <tbody><tr>
    <th scope="col">Nombre</th>
    <th scope="col">Dirección</th>
    <th scope="col">Teléfono</th>
  </tr>
HERE;

echo $verse;
echo "<tr>";
echo "<td>" . $amigos[0]["nombre"] . "</td>";
echo "<td>" . $amigos[0]["direccion"] . "</td>";
echo "<td>" . $amigos[0]["edad"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $amigos[1]["nombre"] . "</td>";
echo "<td>" . $amigos[1]["direccion"] . "</td>";
echo "<td>" . $amigos[1]["edad"] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $amigos[2]["nombre"] . "</td>";
echo "<td>" . $amigos[2]["direccion"] . "</td>";
echo "<td>" . $amigos[2]["edad"] . "</td>";
echo "</tr>";
