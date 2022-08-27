<?php

include("Entities/Circulo.php");

$circulo = new Circulo(0,0,0);

echo "X: " . $circulo->A = 1;
echo "<br>";
echo "Y: " . $circulo->B = 2;
echo "<br>";
echo "Radio: " . $circulo->Radio = 3;
echo "<br>";
echo "Area: " . $circulo->Area();
echo "<br>";
$circulo->Mover(3);
echo "Mover: X:" . $circulo->A . ", Y:" . $circulo->B;
echo "<br>";
$circulo->Inflar(10);
echo "Inflar: " . $circulo->Radio;
echo "<br>";
$circulo->Desinflar(5);
echo "Desinflar: " . $circulo->Radio;




