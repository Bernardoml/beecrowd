<?php

$input = (int)trim(fgets(STDIN));

$ddd = [
    61 => "Brasilia",
    71 => "Salvador",
    11 => "Sao Paulo",
    21 => "Rio de Janeiro",
    32 => "Juiz de Fora",
    19 => "Campinas",
    27 => "Vitoria",
    31 => "Belo Horizonte",
];

if (array_key_exists($input, $ddd)) {
    echo $ddd[$input] . PHP_EOL;
} else {
    echo "DDD nao cadastrado" . PHP_EOL;
}

?>