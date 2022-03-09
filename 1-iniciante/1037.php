<?php

$input = number_format((float)fgets(STDIN), 2);

switch ($input) {
    case ($input >= 0 && $input <= 25):
        echo "Intervalo [0,25]" . PHP_EOL;
        break;
    case ($input > 25 && $input <= 50):
        echo "Intervalo (25,50]" . PHP_EOL;
        break;
    case ($input > 50 && $input <= 75):
        echo "Intervalo (50,75]" . PHP_EOL;
        break;
    case ($input > 75 && $input <= 100):
        echo "Intervalo (75,100]" . PHP_EOL;
        break;
    default:
        echo "Fora de intervalo" . PHP_EOL;
        break;
}

?>