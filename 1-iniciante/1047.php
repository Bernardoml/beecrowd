<?php

$input = explode(" ", trim(fgets(STDIN)));

// transformar tudo para minutos
$inicio = ((int)$input[0] * 60) + (int)$input[1];
$final = ((int)$input[2] * 60) + (int)$input[3];

$horaDuracao = 0;
$minutoDuracao = 0;

if ($inicio < $final) {
    $horaDuracao = intdiv(($final - $inicio), 60);
    $minutoDuracao = ($final - $inicio) % 60;
} elseif ($inicio > $final) {
    // 24 horas x 60 minutos
    $final += (24 * 60);
    $horaDuracao = intdiv(($final - $inicio), 60);
    $minutoDuracao = ($final - $inicio) % 60;
} else {
    $horaDuracao = 24;
}

echo "O JOGO DUROU " . $horaDuracao . " HORA(S) E " . $minutoDuracao . " MINUTO(S)" . PHP_EOL;

?>