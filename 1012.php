<?php

$valores = explode(" ", fgets(STDIN));

$A = (float)$valores[0];
$B = (float)$valores[1];
$C = (float)$valores[2];

$pi = (float)3.14159;

$triangulo = $A * $C / 2;
$triangulo = number_format($triangulo, 3, ".", "");

$circulo = $pi * pow($C, 2);
$circulo = number_format($circulo, 3, ".", "");

$trapezio = ($A + $B) * $C / 2;
$trapezio = number_format($trapezio, 3, ".", "");

$quadrado = pow($B, 2);
$quadrado = number_format($quadrado, 3, ".", "");

$retangulo = $A * $B;
$retangulo = number_format($retangulo, 3, ".", "");

echo "TRIANGULO: " . $triangulo . PHP_EOL;
echo "CIRCULO: " . $circulo . PHP_EOL;
echo "TRAPEZIO: " . $trapezio . PHP_EOL;
echo "QUADRADO: " . $quadrado . PHP_EOL;
echo "RETANGULO: " . $retangulo . PHP_EOL;

?>