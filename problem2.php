<?php
/*
Cada novo termo na sequência de Fibonacci é gerado pela adição dos dois termos anteriores.
Começando com 1 e 2, os 10 primeiros termos serão: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
Considerando os termos da sequência de Fibonacci cujos valores não excedem quatro milhões,
encontre a soma dos termos de valor par.
*/

$atual = 0;
$ultimo = 1;
$penultimo = 0;

$soma = 0;

while ($atual <= 4000000) {
    $atual = $ultimo + $penultimo;

    // echo "$atual".PHP_EOL;

    $penultimo = $ultimo;
    $ultimo = $atual;

    if ($atual % 2 === 0) {
        $soma += $atual;
        echo "$atual" . PHP_EOL;
    }
}
echo $soma;



