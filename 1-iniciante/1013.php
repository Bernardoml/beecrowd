<?php

$valores = explode(" ", fgets(STDIN));

$A = (int)$valores[0];
$B = (int)$valores[1];
$C = (int)$valores[2];

$maiorAB = ($A + $B + abs($A - $B)) / 2;
$maiorABC = ($maiorAB + $C + abs($maiorAB - $C)) / 2;

echo $maiorABC . " eh o maior" . PHP_EOL;

?>