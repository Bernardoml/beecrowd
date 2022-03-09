<?php 

$input = explode(" ", fgets(STDIN));

$comida = $input[0];
$quantidade = (int)$input[1];

$cardapio = [
    "1" => 4.00,
    "2" => 4.50,
    "3" => 5.00,
    "4" => 2.00,
    "5" => 1.50
];

$total = number_format($cardapio[$comida] * $quantidade, 2);

echo "Total: R$ " . $total . PHP_EOL;

?>