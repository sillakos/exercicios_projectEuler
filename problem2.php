<?php

require_once 'src/modelo/SequenciaFibonacci.php';

use Vios\Exercicio\modelo\SequenciaFibonacci;

/*
Cada novo termo na sequência de Fibonacci é gerado pela adição dos dois termos anteriores.
Começando com 1 e 2, os 10 primeiros termos serão: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
Considerando os termos da sequência de Fibonacci cujos valores não excedem quatro milhões,
encontre a soma dos termos de valor par.
*/

$sequencia = new SequenciaFibonacci();
$contador = 10;
$soma = 0;

foreach ($sequencia->sequencia($contador) as $fibo => $valores) {
    if ($valores % 2 === 0) {
        $soma += $valores;
    }
}
echo $soma;
