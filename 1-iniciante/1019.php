<?php

$input = (int)fgets(STDIN);

$segundos = 0;
$minutos = 0;
$horas = 0;

while ($input >= 1) {
    switch ($input) {
        case ($input >= 3600):
            $horas += 1;
            $input -= 3600;
            break;
        case ($input >= 60):
            $minutos += 1;
            $input -= 60;
            break;
        case ($input >= 1):
            $segundos += $input;
            $input = 0;
        default:
            break;
    }
}

echo $horas . ":" . $minutos . ":" . $segundos . PHP_EOL;

?>