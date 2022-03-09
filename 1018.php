<?php

$input = (int)fgets(STDIN);
$valor = (int)$input;

$nota100 = 0;
$nota50 = 0;
$nota20 = 0;
$nota10 = 0;
$nota5 = 0;
$nota2 = 0;
$nota1 = 0;

while($valor > 0) {
    switch($valor > 0){
        case ($valor >= 100):
            $nota100 += 1;
            $valor -= 100;
            break;
        case ($valor >= 50):
            $nota50 += 1;
            $valor -= 50;
            break;
        case ($valor >= 20):
            $nota20 += 1;
            $valor -= 20;
            break;        
        case ($valor >= 10):
            $nota10 += 1;
            $valor -= 10;
            break;
        case ($valor >= 5):
            $nota5 += 1;
            $valor -= 5;
            break;
        case ($valor >= 2):
            $nota2 += 1;
            $valor -= 2;
            break;
        case ($valor >= 1):
            $nota1 += 1;
            $valor -=1;
            break;
        default:
            break;
    }
}

echo $input . PHP_EOL;
echo $nota100 . " nota(s) de R$ 100,00" . PHP_EOL;
echo $nota50 . " nota(s) de R$ 50,00" . PHP_EOL;
echo $nota20 . " nota(s) de R$ 20,00" . PHP_EOL;
echo $nota10 . " nota(s) de R$ 10,00" . PHP_EOL;
echo $nota5 . " nota(s) de R$ 5,00" . PHP_EOL;
echo $nota2 . " nota(s) de R$ 2,00" . PHP_EOL;
echo $nota1 . " nota(s) de R$ 1,00" . PHP_EOL;

?>