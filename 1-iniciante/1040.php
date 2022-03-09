<?php

$input = explode(" ", fgets(STDIN));

$media = ((2 * (float)$input[0]) + (3 * (float)$input[1]) + (4 * (float)$input[2]) + (float)$input[3]) / 10;
$media = number_format(round($media, 1, PHP_ROUND_HALF_EVEN), 1);

$msgAprovado = "Aluno aprovado." . PHP_EOL;
$msgReprovado = "Aluno reprovado." . PHP_EOL;

echo "Media: " . $media . PHP_EOL;

if ($media >= 7.0)
{
    echo $msgAprovado;
}
elseif ($media < 5.0) {
    echo $msgReprovado;
}
else {
    echo "Aluno em exame." . PHP_EOL;
    $exame = fgets(STDIN);
    echo "Nota do exame: $exame" ;
    
    $media2 = ($media + (float)$exame) / 2;
    $media2 = number_format(round($media2, 1, PHP_ROUND_HALF_EVEN), 1);

    if ($media2 >= 5.0) 
    {
        echo $msgAprovado;
    }
    else 
    {
        echo $msgReprovado;
    }

    echo "Media final: " . $media2 . PHP_EOL;
}

?>