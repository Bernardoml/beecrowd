<?php

$distancia = (double)fgets(STDIN);
$combustivel = (double)fgets(STDIN);


$consumo = $distancia / $combustivel;
$consumo = number_format($consumo, 3, ".", "");

echo $consumo . " km/l" . PHP_EOL;

?>