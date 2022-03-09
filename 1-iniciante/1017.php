<?php

$horas = (double)fgets(STDIN);
$velocidade_media = (double)fgets(STDIN);

$consumo_medio = (double)12;
$distancia = $horas * $velocidade_media;

$quantidade_litros = $distancia / $consumo_medio;
$quantidade_litros = number_format($quantidade_litros, 3, ".", "");

echo $quantidade_litros . PHP_EOL;

?>