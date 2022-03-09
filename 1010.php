<?php

$item1 = explode(" ", fgets(STDIN));
$item2 = explode(" ", fgets(STDIN));


$pecas = [
    1 => [
        "codigo" => (int)$item1[0],
        "qtde" => (int)$item1[1],
        "valor_un" => (double)$item1[2]
    ],
    2 => [
        "codigo" => (int)$item2[0],
        "qtde" => (int)$item2[1],
        "valor_un" => (double)$item2[2]
    ]
];


$total = ($pecas[1]["qtde"] * $pecas[1]["valor_un"]) 
    + ($pecas[2]["qtde"] * $pecas[2]["valor_un"]);

$total = number_format($total, 2, ".", "");


echo "VALOR A PAGAR: R$ " . $total . PHP_EOL;

?>