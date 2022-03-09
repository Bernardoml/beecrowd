<?php

$input = explode(" ", trim(fgets(STDIN)));

$ordem = $input;
sort($ordem);

foreach ($ordem as $n) {
    echo $n . PHP_EOL;
}

echo "\n";

foreach ($input as $n) {
    echo $n . PHP_EOL;
}

?>