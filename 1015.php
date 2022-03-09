<?php

$ponto1 = explode(" ", fgets(STDIN));
$ponto2 = explode(" ", fgets(STDIN));

$x1 = (float)$ponto1[0];
$y1 = (float)$ponto1[1];

$x2 = (float)$ponto2[0];
$y2 = (float)$ponto2[1];

$distancia = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
$distancia = number_format($distancia, 4, ".", "");

echo $distancia . PHP_EOL;

?>