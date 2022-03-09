<?php

$input = explode(" ", fgets(STDIN));

$a = (float)$input[0];
$b = (float)$input[1];
$c = (float)$input[2];

$preRaiz = $b ** 2 - 4 * $a * $c;
$delta = sqrt($preRaiz);

$msgErro = "Impossivel calcular" . PHP_EOL;

switch (true) {
    case ($preRaiz < 0):
        echo $msgErro;
        break;
    case ($a == 0):
        echo $msgErro;
        break;
    default:
        $r1 = (- $b + $delta) / (2 * $a);
        $r1 = number_format($r1, 5);
        $r2 = (- $b - $delta) / (2 * $a);
        $r2 = number_format($r2, 5);
        echo "R1 = " . $r1 . "\n" . "R2 = " . $r2 . PHP_EOL;
        break;
}

?>