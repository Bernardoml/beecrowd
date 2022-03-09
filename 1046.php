<?php

$input = explode(" ", trim(fgets(STDIN)));

$inicio = (int)$input[0];
$final = (int)$input[1];
$duracao = 0;

if ($inicio < $final) {
    $duracao = $final - $inicio;
} elseif ($inicio > $final) {
    $final += 24;
    $duracao = $final - $inicio;
} else {
    $duracao = 24;
}

echo "O JOGO DUROU " . $duracao . " HORA(S)" . PHP_EOL;

?>