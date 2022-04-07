<?php

$numero = 600851475143;
$fatorPrimo = 0;
$atual = 0;

for ($i = 1; $i <= $numero; $i++) {
    $divisao = $numero / $i;

    if (fmod($atual, $i)) {
        continue;
    } else {
        $fatorPrimo = $i;
    }
    $atual = $divisao;
    $numero = $atual;
}

echo "O maior fator primo do número escolhido é {$fatorPrimo}" . PHP_EOL;
