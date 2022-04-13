<?php

$atual = 0;
$ultimo = 1;
$penultimo = 0;
$cont = 0;

while (strlen($atual) < 3) {
    $atual = $ultimo + $penultimo;

    $penultimo = $ultimo;
    $ultimo = $atual;

    echo $atual . PHP_EOL;

    $cont++;
}
echo 'F ' . ($cont + 1).PHP_EOL;
