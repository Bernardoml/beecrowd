<?php

$input = (float)trim(fgets(STDIN));
$novoSalario = 0;
$reajusteNominal = 0;
$reajustePercentual = 0;

$reajuste = [
    "1" => 0.15,
    "2" => 0.12,
    "3" => 0.10,
    "4" => 0.07,
    "5" => 0.04
];

switch ($input) {
    case ($input <= 400.00):
        $reajusteNominal = $input * $reajuste[1];
        $reajustePercentual = $reajuste[1] * 100;
        $novoSalario = $input + $reajusteNominal;
        break;

    case ($input <= 800.00):
        $reajusteNominal = $input * $reajuste[2];
        $reajustePercentual = $reajuste[2] * 100;
        $novoSalario = $input + $reajusteNominal;
        break;

    case ($input <= 1200.00):
        $reajusteNominal = $input * $reajuste[3];
        $reajustePercentual = $reajuste[3] * 100;
        $novoSalario = $input + $reajusteNominal;
        break;

    case ($input <= 2000.00):
        $reajusteNominal = $input * $reajuste[4];
        $reajustePercentual = $reajuste[4] * 100;
        $novoSalario = $input + $reajusteNominal;
        break;
    
    default:
        $reajusteNominal = $input * $reajuste[5];
        $reajustePercentual = $reajuste[5] * 100;
        $novoSalario = $input + $reajusteNominal;
        break;
}

echo "Novo salario: " . number_format($novoSalario, 2, ".", "") . PHP_EOL;
echo "Reajuste ganho: " . number_format($reajusteNominal, 2, ".", "") . PHP_EOL;
echo "Em percentual: " . number_format($reajustePercentual, 0) . " %". PHP_EOL;

?>