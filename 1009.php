<?php

$nome = (string)fgets(STDIN);
$salario = (double)fgets(STDIN);
$vendas = (double)fgets(STDIN);

$total = ($vendas * 0.15) + $salario;
$total = number_format($total, 2, ".", "");


echo "TOTAL = R$ " . $total . PHP_EOL;

?>