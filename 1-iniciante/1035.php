<?php

$input = explode(" ", fgets(STDIN));

$A = (int)$input[0];
$B = (int)$input[1];
$C = (int)$input[2];
$D = (int)$input[3];

$cond1 = $B > $C;
$cond2 = $D > $A;
$cond3 = ($C + $D) > ($B + $A);
$cond4 = $C > 0 && $D > 0;
$cond5 = ($A % 2) == 0;

$msgAceita = "Valores aceitos" . PHP_EOL;
$msgNaoAceita = "Valores nao aceitos" . PHP_EOL;

switch (true) {
    case (!$cond1):
        echo $msgNaoAceita;
        break;
    case (!$cond2):
        echo $msgNaoAceita;
        break;
    case (!$cond3):
        echo $msgNaoAceita;
        break;
    case (!$cond4):
        echo $msgNaoAceita;
        break;
    case (!$cond5):
        echo $msgNaoAceita;
        break;
    default:
        echo $msgAceita;
        break;
}

?>