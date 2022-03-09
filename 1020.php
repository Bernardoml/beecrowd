<?php

$input = (int)fgets(STDIN);

$ano = 0;
$mes = 0;
$dia = 0;

while ($input >= 1) {
    switch ($input) {
        case ($input >= 365):
            $ano += 1;
            $input -= 365;
            break;
        case ($input >= 30):
            $mes += 1;
            $input -= 30;
            break;
        case ($input >= 1):
            $dia += $input;
            $input = 0;
        default:
            break;
    }
}

echo $ano . " ano(s)" . PHP_EOL;
echo $mes . " mes(es)" . PHP_EOL;
echo $dia . " dia(s)". PHP_EOL;

?>