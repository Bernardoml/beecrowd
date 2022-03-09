<?php

$input = str_replace(",", ".", fgets(STDIN));
$valor = (float)$input * 100;

$notas = [10000, 5000, 2000, 1000, 500, 200];
$notasCont = [0, 0, 0, 0, 0, 0];

$moedas = [100, 50, 25, 10, 5, 1];
$moedasCont = [0, 0, 0, 0, 0, 0];

echo "NOTAS:" . PHP_EOL;

for ($i = 0; $i < 6; $i++)
{
    if ($valor >= $notas[$i])
    {
        $notasCont[$i] = intval($valor / $notas[$i]);
        $valor = $valor - $notasCont[$i] * $notas[$i];
    }

    echo $notasCont[$i] . " nota(s) de R$ " . number_format($notas[$i] / 100, 2, ".", "") . PHP_EOL;
}

echo "MOEDAS:" . PHP_EOL;

for ($i = 0; $i < 6; $i++)
{
    if ($valor >= $moedas[$i])
    {
        $moedasCont[$i] = intval($valor / $moedas[$i]);
        $valor = $valor - $moedasCont[$i] * $moedas[$i];
    }

    echo $moedasCont[$i] . " moeda(s) de R$ " . number_format($moedas[$i] / 100.00, 2, ".", "") . PHP_EOL;
}

?>